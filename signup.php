<?php

session_start();

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (empty($name) || empty($email) || empty($password)) {

        $message = "Please fill all fields.";

    } elseif ($password !== $confirm_password) {

        $message = "Passwords do not match.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email.";

    } elseif (strlen($password) < 6) {

        $message = "Password must contain at least 6 characters.";

    } else {

        $check = $conn->prepare(
            "SELECT id FROM users WHERE email = ?"
        );

        $check->bind_param("s", $email);
        $check->execute();

        $result = $check->get_result();

        if ($result->num_rows > 0) {

            $message = "Email already registered.";

        } else {

            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            $stmt = $conn->prepare(
                "INSERT INTO users (name, email, password)
                 VALUES (?, ?, ?)"
            );

            $stmt->bind_param(
                "sss",
                $name,
                $email,
                $hashed_password
            );

            if ($stmt->execute()) {

                header("Location: login.php?registered=1");
                exit();

            } else {

                $message = "Registration failed.";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Signup - XROOT</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #061220,
                    #0b1220
                );

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            width: 430px;
            max-width: 90%;

            padding: 35px;

            border-radius: 18px;

            background:
                rgba(255,255,255,0.04);

            border:
                1px solid rgba(255,255,255,0.08);

            box-shadow:
                0 20px 60px rgba(0,0,0,0.5);
        }

        h1 {
            text-align: center;
            color: #38bdf8;
        }

        p {
            text-align: center;
            color: #9aa6b2;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 13px;

            border-radius: 8px;

            border:
                1px solid rgba(255,255,255,0.1);

            background:
                rgba(255,255,255,0.05);

            color: white;
        }

        button {
            width: 100%;

            margin-top: 25px;

            padding: 13px;

            border: none;
            border-radius: 8px;

            background:
                linear-gradient(
                    90deg,
                    #38bdf8,
                    #7c3aed
                );

            color: #021824;

            font-weight: bold;

            cursor: pointer;
        }

        a {
            color: #38bdf8;
            text-decoration: none;
        }

        .message {
            color: #ff7777;
            text-align: center;
            margin: 15px 0;
        }

    </style>

</head>

<body>

<div class="box">

    <h1>XROOT</h1>

    <p>Create your Cyber Security account</p>

    <?php if ($message != ""): ?>

        <div class="message">
            <?php echo htmlspecialchars($message); ?>
        </div>

    <?php endif; ?>

    <form method="POST">

        <label>Full Name</label>

        <input
            type="text"
            name="name"
            placeholder="Enter your name"
            required
        >

        <label>Email</label>

        <input
            type="email"
            name="email"
            placeholder="Enter your email"
            required
        >

        <label>Password</label>

        <input
            type="password"
            name="password"
            placeholder="Create password"
            required
        >

        <label>Confirm Password</label>

        <input
            type="password"
            name="confirm_password"
            placeholder="Confirm password"
            required
        >

        <button type="submit">
            Create Account
        </button>

    </form>

    <p>
        Already have an account?
        <a href="login.php">Login</a>
    </p>

    <p>
        <a href="index.php">← Back to Home</a>
    </p>

</div>

</body>
</html>
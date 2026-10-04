<?php

session_start();

include "db.php";

$message = "";

if (isset($_GET["registered"])) {
    $message = "Registration successful. Please login.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {

        $message = "Please enter email and password.";

    } else {

        $stmt = $conn->prepare(
            "SELECT id, name, email, password
             FROM users
             WHERE email = ?"
        );

        $stmt->bind_param("s", $email);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {

            $user = $result->fetch_assoc();

            if (
                password_verify(
                    $password,
                    $user["password"]
                )
            ) {

                session_regenerate_id(true);

                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_name"] = $user["name"];
                $_SESSION["user_email"] = $user["email"];

                header("Location: dashboard.php");
                exit();

            } else {

                $message = "Invalid email or password.";
            }

        } else {

            $message = "Invalid email or password.";
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

<title>Login - XROOT</title>

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

    width: 400px;

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

    margin-top: 18px;

    margin-bottom: 7px;
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

    text-align: center;

    color: #7de68a;

    margin: 15px 0;
}

</style>

</head>

<body>

<div class="box">

<h1>XROOT</h1>

<p>Login to your account</p>

<?php if ($message != ""): ?>

<div class="message">
    <?php echo htmlspecialchars($message); ?>
</div>

<?php endif; ?>


<form method="POST">

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
    placeholder="Enter your password"
    required
>


<button type="submit">
    Login
</button>

</form>


<p>
    Don't have an account?
    <a href="signup.php">
        Create Account
    </a>
</p>


<p>
    <a href="index.php">
        ← Back to Home
    </a>
</p>

</div>

</body>

</html>
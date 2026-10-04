<?php

session_start();

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $user_message = trim($_POST["message"]);

    if (
        !empty($name) &&
        !empty($email) &&
        !empty($user_message)
    ) {

        $stmt = $conn->prepare(
            "INSERT INTO messages
            (name, email, message)
            VALUES (?, ?, ?)"
        );

        $stmt->bind_param(
            "sss",
            $name,
            $email,
            $user_message
        );

        if ($stmt->execute()) {

            $message = "Message sent successfully.";

        } else {

            $message = "Something went wrong.";
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

<title>Services - XROOT</title>

<style>

* {
    box-sizing: border-box;
}

body {

    margin: 0;

    font-family: Arial, sans-serif;

    color: white;

    background:
        linear-gradient(
            180deg,
            #061220,
            #0b1220
        );
}

header {

    background: #050b12;

    padding: 20px;

    text-align: center;
}

header h1 {

    color: #38bdf8;
}

nav a {

    color: #9aa6b2;

    text-decoration: none;

    margin: 0 10px;
}

nav a:hover {

    color: #38bdf8;
}

.container {

    max-width: 1100px;

    margin: auto;

    padding: 70px 20px;
}

h2 {

    text-align: center;

    font-size: 40px;
}

.subtitle {

    text-align: center;

    color: #9aa6b2;

    margin-bottom: 40px;
}

.services {

    display: grid;

    grid-template-columns:
        repeat(3,1fr);

    gap: 25px;
}

.card {

    background:
        rgba(255,255,255,0.04);

    padding: 25px;

    border-radius: 15px;

    border:
        1px solid rgba(255,255,255,0.07);
}

.card h3 {

    color: #38bdf8;
}

.card p {

    color: #9aa6b2;

    line-height: 1.7;
}

.contact {

    margin-top: 50px;

    max-width: 700px;

    margin-left: auto;

    margin-right: auto;

    padding: 30px;

    background:
        rgba(255,255,255,0.04);

    border-radius: 15px;
}

input,
textarea {

    width: 100%;

    padding: 12px;

    margin-top: 8px;

    margin-bottom: 15px;

    border-radius: 8px;

    border:
        1px solid rgba(255,255,255,0.1);

    background:
        rgba(255,255,255,0.05);

    color: white;
}

textarea {

    min-height: 130px;

    resize: vertical;
}

button {

    padding: 12px 20px;

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

.success {

    color: #7de68a;

    text-align: center;

    margin-bottom: 20px;
}

footer {

    text-align: center;

    padding: 25px;

    color: #9aa6b2;
}

@media(max-width:800px) {

    .services {
        grid-template-columns: 1fr;
    }
}

</style>

</head>

<body>

<header>

<h1>XROOT</h1>

<nav>

<a href="index.php">Home</a>

<a href="learn.php">Learn</a>

<a href="practice.php">Practice</a>

<a href="certification.php">
Certification
</a>

<a href="services.php">
Services
</a>

</nav>

</header>


<div class="container">

<h2>
Our Services
</h2>

<p class="subtitle">
Professional cybersecurity services and training.
</p>


<div class="services">


<div class="card">

<h3>
Web Application Security
</h3>

<p>
Security testing of web applications
to identify vulnerabilities and
security weaknesses.
</p>

</div>


<div class="card">

<h3>
Vulnerability Assessment
</h3>

<p>
Identify, analyze and prioritize
vulnerabilities in systems and
applications.
</p>

</div>


<div class="card">

<h3>
Penetration Testing
</h3>

<p>
Authorized security testing designed
to discover security weaknesses.
</p>

</div>


<div class="card">

<h3>
Cybersecurity Training
</h3>

<p>
Practical training covering ethical
hacking, web security and defensive
security.
</p>

</div>


<div class="card">

<h3>
Digital Forensics
</h3>

<p>
Learn digital evidence analysis and
security incident investigation.
</p>

</div>


<div class="card">

<h3>
Security Consulting
</h3>

<p>
Security guidance for applications,
infrastructure and cybersecurity
practices.
</p>

</div>


</div>


<div class="contact">

<h2>
Contact XROOT
</h2>

<?php if ($message != ""): ?>

<div class="success">

<?php echo htmlspecialchars($message); ?>

</div>

<?php endif; ?>


<form method="POST">

<label>Name</label>

<input
type="text"
name="name"
placeholder="Your name"
required
>


<label>Email</label>

<input
type="email"
name="email"
placeholder="Your email"
required
>


<label>Message</label>

<textarea
name="message"
placeholder="How can we help?"
required
></textarea>


<button type="submit">
Send Message
</button>

</form>

</div>

</div>


<footer>
© 2026 XROOT Cyber Security
</footer>

</body>

</html>
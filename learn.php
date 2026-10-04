<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Learn - XROOT</title>

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

.intro {

    text-align: center;

    color: #9aa6b2;

    margin-bottom: 45px;
}

.courses {

    display: grid;

    grid-template-columns:
        repeat(3,1fr);

    gap: 25px;
}

.course {

    background:
        rgba(255,255,255,0.04);

    border-radius: 15px;

    overflow: hidden;

    border:
        1px solid rgba(255,255,255,0.07);
}

.course img {

    width: 100%;

    height: 190px;

    object-fit: cover;
}

.course-content {

    padding: 22px;
}

.course h3 {

    color: #38bdf8;
}

.course p {

    color: #9aa6b2;

    line-height: 1.6;
}

.btn {

    display: inline-block;

    padding: 10px 15px;

    background:
        linear-gradient(
            90deg,
            #38bdf8,
            #7c3aed
        );

    color: #021824;

    border-radius: 8px;

    text-decoration: none;

    font-weight: bold;
}

form {
    display: inline;
}

button.btn {
    border: none;
    cursor: pointer;
}

footer {

    text-align: center;

    padding: 25px;

    color: #9aa6b2;
}

@media(max-width:800px) {

    .courses {
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

<a href="certification.php">Certification</a>

<a href="services.php">Services</a>

<?php if (isset($_SESSION["user_id"])): ?>

<a href="dashboard.php">Dashboard</a>

<a href="logout.php">Logout</a>

<?php else: ?>

<a href="login.php">Login</a>

<?php endif; ?>

</nav>

</header>


<div class="container">

<h2>
Learn Cyber Security
</h2>

<p class="intro">
Build practical cybersecurity skills through
courses and hands-on learning.
</p>


<div class="courses">


<div class="course">

<img
src="images/web.jpg"
alt="Web Security"
>

<div class="course-content">

<h3>
Web Security
</h3>

<p>
Learn OWASP Top 10, XSS, SQL Injection,
authentication security, Burp Suite and
web penetration testing.
</p>

<?php if (isset($_SESSION["user_id"])): ?>

<form method="POST" action="enroll.php">

<input
type="hidden"
name="course"
value="Web Security"
>

<button class="btn">
Enroll
</button>

</form>

<?php else: ?>

<a href="login.php" class="btn">
Login to Enroll
</a>

<?php endif; ?>

</div>

</div>


<div class="course">

<img
src="images/forensics.jpg"
alt="Digital Forensics"
>

<div class="course-content">

<h3>
Digital Forensics
</h3>

<p>
Learn digital investigation, evidence
collection and forensic analysis.
</p>

<?php if (isset($_SESSION["user_id"])): ?>

<form method="POST" action="enroll.php">

<input
type="hidden"
name="course"
value="Digital Forensics"
>

<button class="btn">
Enroll
</button>

</form>

<?php else: ?>

<a href="login.php" class="btn">
Login to Enroll
</a>

<?php endif; ?>

</div>

</div>


<div class="course">

<img
src="images/cloud.jpg"
alt="Cloud Security"
>

<div class="course-content">

<h3>
Cloud Security
</h3>

<p>
Learn cloud security fundamentals,
identity management and security
best practices.
</p>

<?php if (isset($_SESSION["user_id"])): ?>

<form method="POST" action="enroll.php">

<input
type="hidden"
name="course"
value="Cloud Security"
>

<button class="btn">
Enroll
</button>

</form>

<?php else: ?>

<a href="login.php" class="btn">
Login to Enroll
</a>

<?php endif; ?>

</div>

</div>


<div class="course">

<div class="course-content">

<h3>
Ethical Hacking
</h3>

<p>
Learn reconnaissance, scanning,
vulnerability assessment and
security testing.
</p>

<?php if (isset($_SESSION["user_id"])): ?>

<form method="POST" action="enroll.php">

<input
type="hidden"
name="course"
value="Ethical Hacking"
>

<button class="btn">
Enroll
</button>

</form>

<?php else: ?>

<a href="login.php" class="btn">
Login to Enroll
</a>

<?php endif; ?>

</div>

</div>


<div class="course">

<div class="course-content">

<h3>
Network Security
</h3>

<p>
Learn networking, Nmap, Wireshark,
firewalls and network security.
</p>

<?php if (isset($_SESSION["user_id"])): ?>

<form method="POST" action="enroll.php">

<input
type="hidden"
name="course"
value="Network Security"
>

<button class="btn">
Enroll
</button>

</form>

<?php else: ?>

<a href="login.php" class="btn">
Login to Enroll
</a>

<?php endif; ?>

</div>

</div>


<div class="course">

<div class="course-content">

<h3>
Bug Bounty
</h3>

<p>
Learn vulnerability discovery,
responsible disclosure and
bug bounty methodology.
</p>

<?php if (isset($_SESSION["user_id"])): ?>

<form method="POST" action="enroll.php">

<input
type="hidden"
name="course"
value="Bug Bounty"
>

<button class="btn">
Enroll
</button>

</form>

<?php else: ?>

<a href="login.php" class="btn">
Login to Enroll
</a>

<?php endif; ?>

</div>

</div>


</div>

</div>


<footer>
© 2026 XROOT Cyber Security
</footer>

</body>

</html>
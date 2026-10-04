<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Certification - XROOT</title>

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

    max-width: 900px;

    margin: auto;

    padding: 80px 20px;
}

.certificate {

    padding: 50px;

    text-align: center;

    border-radius: 20px;

    background:
        linear-gradient(
            135deg,
            rgba(56,189,248,0.08),
            rgba(124,58,237,0.08)
        );

    border:
        2px solid rgba(56,189,248,0.3);

    box-shadow:
        0 20px 70px rgba(0,0,0,0.5);
}

.certificate h2 {

    font-size: 42px;

    color: #38bdf8;
}

.certificate p {

    color: #9aa6b2;

    line-height: 1.7;
}

.features {

    display: grid;

    grid-template-columns:
        repeat(3,1fr);

    gap: 15px;

    margin: 35px 0;
}

.feature {

    padding: 20px;

    background:
        rgba(255,255,255,0.04);

    border-radius: 10px;
}

.feature strong {

    display: block;

    font-size: 24px;

    color: #38bdf8;
}

.btn {

    display: inline-block;

    padding: 13px 20px;

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

footer {

    text-align: center;

    padding: 25px;

    color: #9aa6b2;
}

@media(max-width:700px) {

    .features {
        grid-template-columns: 1fr;
    }

    .certificate {
        padding: 30px 15px;
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

<div class="certificate">

<h2>
Cyber Security Certification
</h2>

<p>
Build practical cybersecurity knowledge
and complete hands-on learning activities
to earn your certificate.
</p>


<div class="features">

<div class="feature">

<strong>30+</strong>

Modules

</div>


<div class="feature">

<strong>97%</strong>

Practical

</div>


<div class="feature">

<strong>100+</strong>

Labs

</div>

</div>


<h3>
Certification Includes
</h3>

<p>

✔ Cybersecurity Fundamentals<br>

✔ Ethical Hacking<br>

✔ Web Application Security<br>

✔ Network Security<br>

✔ Vulnerability Assessment<br>

✔ Practical Labs<br>

✔ Final Assessment

</p>


<?php if (isset($_SESSION["user_id"])): ?>

<a
href="dashboard.php"
class="btn"
>
Go to Dashboard
</a>

<?php else: ?>

<a
href="signup.php"
class="btn"
>
Enroll Now
</a>

<?php endif; ?>


</div>

</div>


<footer>
© 2026 XROOT Cyber Security
</footer>

</body>

</html>
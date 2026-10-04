<?php

session_start();

if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");

    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Dashboard - XROOT</title>

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

    padding: 18px 30px;

    display: flex;

    justify-content: space-between;

    align-items: center;
}

header h1 {

    margin: 0;

    color: #38bdf8;
}

nav a {

    color: #9aa6b2;

    text-decoration: none;

    margin-left: 15px;
}

nav a:hover {

    color: #38bdf8;
}

.container {

    max-width: 1100px;

    margin: auto;

    padding: 70px 20px;
}

.welcome {

    padding: 35px;

    border-radius: 18px;

    background:
        rgba(255,255,255,0.04);

    border:
        1px solid rgba(255,255,255,0.07);
}

.welcome h2 {

    font-size: 35px;
}

.welcome span {

    color: #38bdf8;
}

.cards {

    display: grid;

    grid-template-columns:
        repeat(3,1fr);

    gap: 20px;

    margin-top: 30px;
}

.card {

    padding: 25px;

    border-radius: 15px;

    background:
        rgba(255,255,255,0.04);

    border:
        1px solid rgba(255,255,255,0.07);
}

.card h3 {

    color: #38bdf8;
}

.card p {

    color: #9aa6b2;

    line-height: 1.6;
}

.btn {

    display: inline-block;

    padding: 10px 15px;

    border-radius: 8px;

    text-decoration: none;

    background:
        linear-gradient(
            90deg,
            #38bdf8,
            #7c3aed
        );

    color: #021824;

    font-weight: bold;
}

@media(max-width:750px) {

    .cards {
        grid-template-columns: 1fr;
    }

    header {
        flex-direction: column;
        gap: 15px;
    }
}

</style>

</head>

<body>

<header>

<h1>XROOT</h1>

<nav>

<a href="index.php">
Home
</a>

<a href="learn.php">
Learn
</a>

<a href="practice.php">
Practice
</a>

<a href="logout.php">
Logout
</a>

</nav>

</header>


<div class="container">

<div class="welcome">

<h2>
Welcome,
<span>
<?php echo htmlspecialchars($_SESSION["user_name"]); ?>
</span>
</h2>

<p>
You are successfully logged in to
the XROOT Cyber Security platform.
</p>

<p>
Email:
<?php echo htmlspecialchars($_SESSION["user_email"]); ?>
</p>

</div>


<div class="cards">

<div class="card">

<h3>
Learn
</h3>

<p>
Explore cybersecurity courses and
build your technical knowledge.
</p>

<a href="learn.php" class="btn">
Explore Courses
</a>

</div>


<div class="card">

<h3>
Practice
</h3>

<p>
Improve your skills through practical
cybersecurity labs.
</p>

<a href="practice.php" class="btn">
Practice Now
</a>

</div>


<div class="card">

<h3>
Certification
</h3>

<p>
Complete your training and work
towards your cybersecurity certificate.
</p>

<a href="certification.php" class="btn">
View Certification
</a>

</div>

</div>

</div>

</body>

</html>
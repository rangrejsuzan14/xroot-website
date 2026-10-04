<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Practice - XROOT</title>

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

.labs {

    display: grid;

    grid-template-columns:
        repeat(2,1fr);

    gap: 25px;
}

.lab {

    background:
        rgba(255,255,255,0.04);

    padding: 25px;

    border-radius: 15px;

    border:
        1px solid rgba(255,255,255,0.07);
}

.lab h3 {

    color: #38bdf8;
}

.lab p {

    color: #9aa6b2;

    line-height: 1.7;
}

.difficulty {

    color: #7de68a !important;

    font-weight: bold;
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

footer {

    text-align: center;

    padding: 25px;

    color: #9aa6b2;
}

@media(max-width:750px) {

    .labs {
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

</nav>

</header>


<div class="container">

<h2>
Cybersecurity Practice Labs
</h2>

<p class="intro">
Practice your cybersecurity skills in
authorized educational environments.
</p>


<div class="labs">


<div class="lab">

<h3>
Web Security Lab
</h3>

<p>
Practice identifying common web
application vulnerabilities in a
controlled environment.
</p>

<p class="difficulty">
Difficulty: Beginner
</p>

<a href="#" class="btn">
Start Lab
</a>

</div>


<div class="lab">

<h3>
Network Scanning Lab
</h3>

<p>
Learn network reconnaissance and
scanning using Nmap in an
authorized lab.
</p>

<p class="difficulty">
Difficulty: Beginner
</p>

<a href="#" class="btn">
Start Lab
</a>

</div>


<div class="lab">

<h3>
Linux Security Lab
</h3>

<p>
Practice Linux commands, permissions,
processes and security configuration.
</p>

<p class="difficulty">
Difficulty: Intermediate
</p>

<a href="#" class="btn">
Start Lab
</a>

</div>


<div class="lab">

<h3>
Digital Forensics Lab
</h3>

<p>
Practice analyzing digital evidence
and basic forensic investigation.
</p>

<p class="difficulty">
Difficulty: Intermediate
</p>

<a href="#" class="btn">
Start Lab
</a>

</div>


<div class="lab">

<h3>
SQL Security Lab
</h3>

<p>
Learn SQL injection concepts using
a controlled educational environment.
</p>

<p class="difficulty">
Difficulty: Intermediate
</p>

<a href="#" class="btn">
Start Lab
</a>

</div>


<div class="lab">

<h3>
CTF Challenge
</h3>

<p>
Solve cybersecurity challenges and
improve your security analysis skills.
</p>

<p class="difficulty">
Difficulty: Advanced
</p>

<a href="#" class="btn">
Start Challenge
</a>

</div>


</div>

</div>


<footer>
© 2026 XROOT Cyber Security
</footer>

</body>

</html>
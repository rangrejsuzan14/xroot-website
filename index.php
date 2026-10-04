<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Cyber Security - XROOT</title>

    <style>

        * {
            box-sizing: border-box;
        }

        :root {

            --bg: #061220;
            --panel: #07101c;
            --accent: #38bdf8;
            --muted: #9aa6b2;

            --glass: rgba(255,255,255,0.03);

            --maxw: 1100px;

            --radius: 12px;

            --txt: #e6eef6;
        }

        html {
            scroll-behavior: smooth;
        }

        body {

            margin: 0;

            min-height: 100vh;

            background:
                linear-gradient(
                    180deg,
                    #061220 0%,
                    #0b1220 100%
                );

            color: var(--txt);

            font-family:
                Inter,
                system-ui,
                -apple-system,
                "Segoe UI",
                Roboto,
                Arial,
                sans-serif;
        }

        a {
            color: inherit;
        }

        /* =========================
           HEADER
        ========================= */

        .header {

            position: sticky;

            top: 0;

            z-index: 1000;

            background:
                rgba(6, 18, 32, 0.92);

            backdrop-filter: blur(6px);

            border-bottom:
                1px solid
                rgba(255,255,255,0.04);
        }

        .header-inner {

            max-width: var(--maxw);

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 12px 18px;
        }

        .brand {

            display: flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

            font-weight: 800;

            font-size: 20px;

            color: var(--txt);
        }

        .brand-logo {

            width: 40px;

            height: 40px;

            border-radius: 8px;

            object-fit: cover;

            background:
                var(--glass);

            padding: 5px;
        }

        .nav {

            display: flex;

            align-items: center;

            gap: 5px;

            flex-wrap: wrap;
        }

        .nav a {

            color: var(--muted);

            text-decoration: none;

            padding: 8px 12px;

            border-radius: 8px;

            font-weight: 700;
        }

        .nav a:hover,
        .nav a.active {

            color: var(--accent);

            background:
                rgba(56,189,248,0.08);
        }

        .actions {

            display: flex;

            gap: 8px;

            align-items: center;
        }

        .btn {

            display: inline-block;

            padding: 10px 15px;

            border-radius: 8px;

            text-decoration: none;

            font-weight: 700;

            cursor: pointer;

            border: none;
        }

        .btn-primary {

            background:
                linear-gradient(
                    90deg,
                    #38bdf8,
                    #7c3aed
                );

            color: #021824;
        }

        .btn-secondary {

            background:
                transparent;

            color: var(--muted);

            border:
                1px solid
                rgba(255,255,255,0.08);
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        /* =========================
           HERO
        ========================= */

        .hero {

            min-height: 680px;

            display: flex;

            align-items: center;

            justify-content: center;

            padding:
                90px 20px 60px;
        }

        .container {

            max-width: var(--maxw);

            width: 100%;

            margin: 0 auto;
        }

        .hero-grid {

            display: grid;

            grid-template-columns:
                1fr 420px;

            gap: 28px;

            align-items: center;
        }

        .hero-title {

            font-size: 56px;

            margin: 0 0 12px;

            line-height: 1.02;

            color: #e6eef6;
        }

        .hero-title span {

            color: var(--accent);
        }

        .lead {

            margin: 0 0 20px;

            color: var(--muted);

            font-size: 18px;

            line-height: 1.7;

            max-width: 700px;
        }

        .search-form {

            display: flex;

            gap: 10px;

            margin-top: 20px;
        }

        .search-form input {

            flex: 1;

            padding: 13px;

            border-radius: 10px;

            border:
                1px solid
                rgba(255,255,255,0.08);

            background:
                rgba(255,255,255,0.03);

            color: var(--txt);

            outline: none;
        }

        .search-form input:focus {

            border-color:
                var(--accent);
        }

        .search-form button {

            padding: 13px 20px;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    90deg,
                    #38bdf8,
                    #7c3aed
                );

            color: #021824;

            font-weight: 800;

            cursor: pointer;
        }

        /* =========================
           STATS
        ========================= */

        .stats {

            display: flex;

            gap: 25px;

            margin-top: 30px;

            flex-wrap: wrap;
        }

        .stat {

            min-width: 100px;
        }

        .stat strong {

            display: block;

            color: #ffffff;

            font-size: 24px;
        }

        .stat span {

            color: var(--muted);

            font-size: 14px;
        }

        /* =========================
           HERO CARD
        ========================= */

        .hero-card {

            background:
                rgba(255,255,255,0.03);

            border:
                1px solid
                rgba(255,255,255,0.07);

            padding: 28px;

            border-radius: 18px;

            box-shadow:
                0 20px 60px
                rgba(0,0,0,0.45);
        }

        .hero-card h3 {

            margin-top: 0;

            color: var(--accent);

            font-size: 24px;
        }

        .hero-card p {

            color: var(--muted);

            line-height: 1.7;
        }

        .terminal {

            background: #020812;

            border-radius: 10px;

            padding: 18px;

            margin-top: 20px;

            border:
                1px solid
                rgba(255,255,255,0.06);

            font-family:
                Consolas,
                monospace;

            color: #7de68a;

            line-height: 1.8;
        }

        .terminal .blue {
            color: #38bdf8;
        }

        /* =========================
           SECTIONS
        ========================= */

        section {

            padding: 80px 20px;
        }

        .section-title {

            text-align: center;

            font-size: 36px;

            margin:
                0 0 12px;
        }

        .section-text {

            text-align: center;

            color: var(--muted);

            max-width: 700px;

            margin:
                0 auto 40px;

            line-height: 1.7;
        }

        /* =========================
           FEATURES
        ========================= */

        .features {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 22px;
        }

        .feature-card {

            padding: 25px;

            background:
                rgba(255,255,255,0.03);

            border:
                1px solid
                rgba(255,255,255,0.07);

            border-radius: 15px;

            transition: 0.3s;
        }

        .feature-card:hover {

            transform: translateY(-5px);

            border-color:
                rgba(56,189,248,0.4);
        }

        .feature-card h3 {

            color: var(--accent);

            margin-top: 0;
        }

        .feature-card p {

            color: var(--muted);

            line-height: 1.7;
        }

        .icon {

            font-size: 32px;

            margin-bottom: 10px;
        }

        /* =========================
           COURSES
        ========================= */

        .courses {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 22px;
        }

        .course-card {

            padding: 25px;

            background:
                rgba(255,255,255,0.03);

            border:
                1px solid
                rgba(255,255,255,0.07);

            border-radius: 15px;
        }

        .course-card h3 {

            color: var(--accent);
        }

        .course-card p {

            color: var(--muted);

            line-height: 1.6;
        }

        /* =========================
           CTA
        ========================= */

        .cta {

            text-align: center;

            padding:
                60px 25px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    rgba(56,189,248,0.08),
                    rgba(124,58,237,0.08)
                );

            border:
                1px solid
                rgba(56,189,248,0.15);
        }

        .cta h2 {

            margin-top: 0;

            font-size: 36px;
        }

        .cta p {

            color: var(--muted);

            margin-bottom: 25px;
        }

        /* =========================
           FOOTER
        ========================= */

        .site-footer {

            padding: 30px 20px;

            text-align: center;

            color: var(--muted);

            border-top:
                1px solid
                rgba(255,255,255,0.05);
        }

        .site-footer strong {

            color: var(--accent);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 980px) {

            .hero-grid {

                grid-template-columns: 1fr;
            }

            .hero-card {

                max-width: 600px;

                margin: auto;
            }

            .features,
            .courses {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .hero-title {

                font-size: 46px;
            }
        }

        @media (max-width: 680px) {

            .header-inner {

                flex-direction: column;

                gap: 12px;
            }

            .nav {

                justify-content: center;
            }

            .actions {

                justify-content: center;
            }

            .hero {

                padding-top: 60px;
            }

            .hero-title {

                font-size: 38px;
            }

            .lead {

                font-size: 16px;
            }

            .features,
            .courses {

                grid-template-columns: 1fr;
            }

            .search-form {

                flex-direction: column;
            }

            .stats {

                justify-content: center;
            }
        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header class="header">

    <div class="header-inner">


        <a href="index.php" class="brand">

            <img
                src="images/logo.jpg"
                alt="XROOT Logo"
                class="brand-logo"
                onerror="this.style.display='none'"
            >

            <span>XROOT</span>

        </a>


        <nav class="nav">

            <a
                href="index.php"
                class="active"
            >
                HOME
            </a>

            <a href="learn.php">
                LEARN
            </a>

            <a href="practice.php">
                PRACTICE
            </a>

            <a href="certification.php">
                CERTIFICATION
            </a>

            <a href="services.php">
                SERVICES
            </a>

        </nav>


        <div class="actions">

            <?php if (isset($_SESSION["user_id"])): ?>

                <a
                    href="dashboard.php"
                    class="btn btn-primary"
                >
                    Dashboard
                </a>

                <a
                    href="logout.php"
                    class="btn btn-secondary"
                >
                    Logout
                </a>

            <?php else: ?>

                <a
                    href="login.php"
                    class="btn btn-secondary"
                >
                    Login
                </a>

                <a
                    href="signup.php"
                    class="btn btn-primary"
                >
                    Signup
                </a>

            <?php endif; ?>

        </div>


    </div>

</header>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="container">

        <div class="hero-grid">


            <div class="hero-left">


                <h1 class="hero-title">

                    Anyone Can Learn
                    <span>
                        Cyber Security
                    </span>

                </h1>


                <p class="lead">

                    Hands-on cyber security learning
                    with clear lessons, real labs and
                    industry-ready certifications.

                    Build practical skills from web
                    exploitation to defensive monitoring.

                </p>


                <form
                    class="search-form"
                    onsubmit="return false;"
                >

                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search topics — e.g. web security, forensics, cloud"
                    >

                    <button
                        type="button"
                        onclick="searchTopic()"
                    >
                        Search
                    </button>

                </form>


                <div class="stats">


                    <div class="stat">

                        <strong>
                            30+
                        </strong>

                        <span>
                            Learning Modules
                        </span>

                    </div>


                    <div class="stat">

                        <strong>
                            97%
                        </strong>

                        <span>
                            Practical Learning
                        </span>

                    </div>


                    <div class="stat">

                        <strong>
                            100+
                        </strong>

                        <span>
                            Security Labs
                        </span>

                    </div>


                </div>


            </div>


            <!-- HERO CARD -->

            <div class="hero-card">

                <h3>
                    THINK LIKE A HACKER.
                </h3>

                <p>
                    Learn how attackers think,
                    discover vulnerabilities and
                    understand how security
                    professionals defend systems.
                </p>


                <div class="terminal">

                    <div>
                        <span class="blue">
                            $
                        </span>
                        nmap target.local
                    </div>

                    <div>
                        <span class="blue">
                            $
                        </span>
                        burpsuite
                    </div>

                    <div>
                        <span class="blue">
                            $
                        </span>
                        vulnerability_scan
                    </div>

                    <div>
                        <span class="blue">
                            $
                        </span>
                        secure_the_system
                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =========================
     WHY XROOT
========================= -->

<section>

    <div class="container">


        <h2 class="section-title">

            Learn. Practice. Defend.

        </h2>


        <p class="section-text">

            XROOT focuses on practical cybersecurity
            education designed to help students
            understand real-world security concepts.

        </p>


        <div class="features">


            <div class="feature-card">

                <div class="icon">
                    🛡️
                </div>

                <h3>
                    Cyber Security
                </h3>

                <p>
                    Understand security fundamentals,
                    threats, vulnerabilities and
                    defensive techniques.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    💻
                </div>

                <h3>
                    Ethical Hacking
                </h3>

                <p>
                    Learn ethical hacking concepts,
                    reconnaissance, vulnerability
                    assessment and penetration testing.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    🌐
                </div>

                <h3>
                    Web Security
                </h3>

                <p>
                    Study OWASP Top 10, authentication,
                    injection, access control and
                    application security.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    🔎
                </div>

                <h3>
                    Digital Forensics
                </h3>

                <p>
                    Understand digital evidence,
                    investigation methods and
                    forensic analysis.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    ☁️
                </div>

                <h3>
                    Cloud Security
                </h3>

                <p>
                    Learn cloud security concepts,
                    identity management and
                    secure cloud architecture.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    🧪
                </div>

                <h3>
                    Practical Labs
                </h3>

                <p>
                    Practice cybersecurity skills
                    inside authorized educational
                    environments.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =========================
     COURSES
========================= -->

<section>

    <div class="container">


        <h2 class="section-title">

            Popular Learning Paths

        </h2>


        <p class="section-text">

            Start with the fundamentals and
            gradually build practical cybersecurity
            skills.

        </p>


        <div class="courses">


            <div class="course-card">

                <h3>
                    Ethical Hacking
                </h3>

                <p>

                    Reconnaissance, scanning,
                    vulnerability assessment,
                    exploitation concepts and
                    security testing.

                </p>

                <a
                    href="learn.php"
                    class="btn btn-primary"
                >
                    Learn More
                </a>

            </div>


            <div class="course-card">

                <h3>
                    Web Application Security
                </h3>

                <p>

                    Learn OWASP Top 10,
                    authentication, access control,
                    injection and secure coding.

                </p>

                <a
                    href="learn.php"
                    class="btn btn-primary"
                >
                    Learn More
                </a>

            </div>


            <div class="course-card">

                <h3>
                    Network Security
                </h3>

                <p>

                    Understand networking,
                    reconnaissance, traffic analysis,
                    firewalls and defensive security.

                </p>

                <a
                    href="learn.php"
                    class="btn btn-primary"
                >
                    Learn More
                </a>

            </div>


            <div class="course-card">

                <h3>
                    Bug Bounty
                </h3>

                <p>

                    Learn vulnerability discovery,
                    responsible disclosure and
                    security research methodology.

                </p>

                <a
                    href="learn.php"
                    class="btn btn-primary"
                >
                    Learn More
                </a>

            </div>


            <div class="course-card">

                <h3>
                    Digital Forensics
                </h3>

                <p>

                    Explore digital evidence,
                    investigation techniques and
                    forensic analysis.

                </p>

                <a
                    href="learn.php"
                    class="btn btn-primary"
                >
                    Learn More
                </a>

            </div>


            <div class="course-card">

                <h3>
                    Cloud Security
                </h3>

                <p>

                    Learn cloud infrastructure,
                    identity security and
                    cloud security best practices.

                </p>

                <a
                    href="learn.php"
                    class="btn btn-primary"
                >
                    Learn More
                </a>

            </div>


        </div>

    </div>

</section>


<!-- =========================
     CTA
========================= -->

<section>

    <div class="container">

        <div class="cta">


            <h2>
                Start Your Cybersecurity Journey
            </h2>


            <p>

                Learn practical skills,
                practice in authorized labs
                and build your cybersecurity career.

            </p>


            <?php if (isset($_SESSION["user_id"])): ?>

                <a
                    href="dashboard.php"
                    class="btn btn-primary"
                >
                    Go To Dashboard
                </a>

            <?php else: ?>

                <a
                    href="signup.php"
                    class="btn btn-primary"
                >
                    Create Free Account
                </a>

                <a
                    href="login.php"
                    class="btn btn-secondary"
                    style="margin-left:8px;"
                >
                    Login
                </a>

            <?php endif; ?>


        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer class="site-footer">

    <p>

        © 2026
        <strong>XROOT</strong>
        Cyber Security.

        All rights reserved.

    </p>

    <p>

        Learn • Practice • Defend

    </p>

</footer>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>

function searchTopic() {

    const input =
        document.getElementById("searchInput");

    const topic =
        input.value.trim().toLowerCase();


    if (topic === "") {

        alert(
            "Please enter a topic to search."
        );

        return;
    }


    if (
        topic.includes("web") ||
        topic.includes("owasp") ||
        topic.includes("xss") ||
        topic.includes("sql")
    ) {

        window.location.href =
            "learn.php";

        return;
    }


    if (
        topic.includes("forensic") ||
        topic.includes("digital")
    ) {

        window.location.href =
            "learn.php";

        return;
    }


    if (
        topic.includes("cloud")
    ) {

        window.location.href =
            "learn.php";

        return;
    }


    if (
        topic.includes("practice") ||
        topic.includes("lab") ||
        topic.includes("ctf")
    ) {

        window.location.href =
            "practice.php";

        return;
    }


    alert(
        "Topic not found. Try: web security, forensics, cloud, practice or OWASP."
    );

}

</script>


</body>

</html>
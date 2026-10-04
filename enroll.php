<?php

session_start();

include "db.php";

if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");

    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_SESSION["user_id"];

    $course = trim($_POST["course"]);

    if (!empty($course)) {

        $stmt = $conn->prepare(
            "INSERT INTO enrollments
             (user_id, course)
             VALUES (?, ?)"
        );

        $stmt->bind_param(
            "is",
            $user_id,
            $course
        );

        $stmt->execute();
    }
}

header("Location: dashboard.php");

exit();

?>
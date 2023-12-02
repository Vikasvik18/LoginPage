<?php
require_once('../php/db.php');

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    echo "Welcome, " . $user['username'] . "!<br>";
    echo "Profile details: <br>";
    echo "ID: " . $user['id'] . "<br>";
    // Add more profile details as needed

    $stmt->close();
} else {
    header("Location: ../login.html");
}

<?php
require_once('../php/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error during registration: " . $stmt->error;
    }

    $stmt->close();
}

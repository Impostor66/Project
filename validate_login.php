<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Save user info in session
        $_SESSION['email'] = $email;
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php?error=1");
    }
}

$conn->close();
?>

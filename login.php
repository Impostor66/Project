<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Parkir</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-form {
            width: 300px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2 class="text-center">Login</h2>
        <form action="php/validate_login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-danger">Email atau password tidak valid.</div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>

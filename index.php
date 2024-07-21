<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center py-4">Sistem Parkir</h2>
        <a href="?page=home">Home</a>
        <a href="?page=monitoring">Monitoring</a>
        <a href="?page=penalty">Denda / Konsekuensi</a>
        <a href="?page=cctv">Pengawasan CCTV</a>
        <a href="?page=area">Area Parkir</a>
        <a href="php/logout.php">Logout</a>
    </div>
    <!-- Navbar -->
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sistem Parkir</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=monitoring">Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=penalty">Denda / Konsekuensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=cctv">Pengawasan CCTV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=area">Area Parkir</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content Area -->
        <div class="container">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch ($page) {
                case 'home':
                    include 'php/home.php';
                    break;
                case 'monitoring':
                    include 'php/monitoring.php';
                    break;
                case 'penalty':
                    include 'php/penalty.php';
                    break;
                case 'cctv':
                    include 'php/cctv.php';
                    break;
                case 'area':
                    include 'php/area.php';
                    break;
                default:
                    include 'php/home.php';
            }
            ?>
        </div>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

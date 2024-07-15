<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
        .section {
            display: none;
        }
        .section.active {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center py-4">Sistem Parkir</h2>
        <a href="#" onclick="showSection('home')">Home</a>
        <a href="#" onclick="showSection('monitoring')">Monitoring</a>
        <a href="#" onclick="showSection('penalty')">Denda / Konsekuensi</a>
        <a href="#" onclick="showSection('cctv')">Pengawasan CCTV</a>
        <a href="#" onclick="showSection('area')">Area Parkir</a>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#" onclick="showSection('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showSection('monitoring')">Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showSection('penalty')">Denda / Konsekuensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showSection('cctv')">Pengawasan CCTV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showSection('area')">Area Parkir</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content Area -->
        <div class="container">
            <div id="home" class="section active">
                <h1 class="mt-4">Selamat Datang di Sistem Parkir</h1>
                <p>Ini adalah halaman utama untuk sistem parkir. Anda dapat menggunakan navbar di atas dan sidebar di sebelah kiri untuk menavigasi melalui fitur-fitur yang ada.</p>
            </div>
            <div id="monitoring" class="section">
                <h1 class="mt-4">Monitoring Area Parkir</h1>
                <p>Pengawasan pada area parkir ini bertujuan agar pihak pengawas kampus dapat menegur dan mengatur ketertiban area parkir.</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Waktu Parkir</th>
                            <th>Plat Nomor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andi</td>
                            <td>08:00</td>
                            <td>AB 1234 CD</td>
                        </tr>
                        <!-- Tambahkan baris sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
            <div id="penalty" class="section">
                <h1 class="mt-4">Denda / Konsekuensi</h1>
                <p>Memberikan kebijakan seperti denda/konsekuensi pada mahasiswa yang tidak patuh terhadap pihak pengawas ataupun mengganggu area parkir merupakan tindakan efektif.</p>
                <ul>
                    <li>Denda Rp 50.000 untuk pelanggaran pertama.</li>
                    <li>Denda Rp 100.000 untuk pelanggaran kedua.</li>
                    <li>Penghapusan hak parkir untuk pelanggaran ketiga.</li>
                </ul>
            </div>
            <div id="cctv" class="section">
                <h1 class="mt-4">Pengawasan CCTV</h1>
                <p>Pengawasan ekstra ini juga sangat berpengaruh untuk menghindari hal-hal yang tidak diinginkan seperti kasus pencurian helm.</p>
                <img src="cctv_image.jpg" alt="CCTV Monitoring" class="img-fluid">
            </div>
            <div id="area" class="section">
                <h1 class="mt-4">Area Parkir yang Luas</h1>
                <p>Area parkir yang sempit akan sangat berpengaruh pada terjadinya kemacetan. Oleh sebab itu, memiliki area parkir yang luas akan sangat membantu.</p>
                <img src="parking_area_image.jpg" alt="Parking Area" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showSection(sectionId) {
            var sections = document.querySelectorAll('.section');
            sections.forEach(function(section) {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>
</html>

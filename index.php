<?php
    require_once "session.php";
    require_once "inc/Koneksi.php";
    require_once "app/Kategori.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO GAS LPG PUTZA | CRUD</title>
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.php"></a>TOKO GAS LPG PUTZA</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="kat_tampil.php">Kategori</a></li>
                <li><a href="brg_tampil.php">Produk</a></li>
                <li><a href="pem_tampil.php">Customer</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
    </header>

    <div class="section">
        <div class="container">
            <div class="box">
                <h2>Selamat Datang di Toko Gas LPG Putza </h2>
                <img src="layout/assets/img/tabung-gas-elpiji.jpg" alt="" width="500" height="300">
                <h4>Jl Harmonika Baru Gg Flamboyan No 21-A Tj Sari, Medan</h4>
            </div>

        </div>

    </div>
           
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 | Sistem Informasi Berbasis Web By Dina Amalia Putri Lubis</small>
        </div>
    </footer>
</body>
</html>
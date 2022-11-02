<?php
error_reporting(0);
include 'koneksi.php';
session_start();
if(!isset($_SESSION['login'])) {
    header('Location: login_user.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en" data-color-mode="light">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/logo.ico">
        <title>Classic's Barbershop</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script>
            alert("Selamat Datang di Website Classic's Barbershop!");
        </script>
    </head>
    <body>
        <!-- header -->
        <div class="medsos">
            <div class="container">
                <ul>
                    <li><a href="https://www.facebook.com/classicsbarbershopsmr"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://instagram.com/classics_barber?igshid=NzNkNDdiOGI="><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
            <!-- <div class="dropdown">
                <span>Mouse over me</span>
                <div class="dropdown-content">
                <p>Hello World!</p>
                </div>
              </div> -->
        </div>
        <header>
            <div class="container">
                <h1><a href="index.php">Classic's Barbershop</a></h1>
                <ul>
                    <li class="active"><a href="index.php">Beranda</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><button>Dark Mode</button></li>
                       
                    <div class="dropdown">
                            <span>Login</span>
                            <div class="dropdown-content">
                            <a href="login_admin.php">Admin</a><br><br>
                            <a href="logout.php">Logout</a><br><br>
                            <a href="register.php">Register</a>
                            </div>
                          </div> 
                </ul>
            </div>
        </header>

    <!-- banner-->
    <section class="banner">
        <div class="banner2">
        </div>
    </section>

    <!-- about -->
    <section class="tentang">
        <div class="container">
            <h3>TENTANG</h3>
            <p>Classic's Barbershop berdiri tahun 02 Febuari 2015, bertempat di jl.Meranti No.31 Samarinda, Kalimantan Timur Indonesia buka dari jam 10.00 pagi - 10.00 malam, tujuan dari classic's barbeshop adalah membuat pria menjadi lebih berkelas sehabis potong rambut di classic's Barbershop. ("Makes Men classy")   </p>
        </div>
    </section>
   
    <!-- fouter -->
    <footer>
        <div class="container">
            <small> copyright &copy; 2015 - Manajemen Classic's Barbeshop, Hak Cipta Dilindungi Undang-undang.</small>
        </div>
    </footer>
</body>
</html>

<script src="script.js"></script>
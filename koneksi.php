<?php 
    $conn = mysqli_connect("localhost", "root", "", "classic's barbershop");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>
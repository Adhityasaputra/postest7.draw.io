<?php
    session_start();
    include 'koneksi.php';  
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['login'] = $_POST['login'];

        $result = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                echo "<script>alert('Login berhasil!');window.location='index.php';</script>";
                exit;
            } 
        } else {
            echo "<script>alert('Username atau Password salah!');window.location='login_user.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="shortcut icon" href="img/logo.ico">
    <title>Classic's Barbershop</title>
</head>
<body>                   
    <div class="container">
        <div class="login">
            <h1>Login</h1>
          
            <form action="" method="POST">
                <hr>
                <p>Classic's Barbershop</p>
                <label for="">USERNAME</label>
                <input type="text" name="username" placeholder="username">
                <label for="">password</label>
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="login" class="regis">Login</button>
                <p>Belum punya akun? <a href="register.php" style="color: red; text-decoration: none;">Register</a></p>
            </form>
        </div>
        <div class="right">
            <img src="img.jpg/foto.jpeg" alt="">
        </div>
    </div>
</body>
</html>
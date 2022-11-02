<?php
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $kode = htmlspecialchars($_POST["kode"]);
    $expired = htmlspecialchars($_POST["expired"]);
    $jenis = htmlspecialchars($_POST["jenis"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $sql = "INSERT INTO input_barang VALUES ('','$nama', '$kode', '$expired', '$jenis', '$deskripsi', '$gambar', '')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'input.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="crud.css">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><h1>Input Barang</h1></td>
            </tr>
            <tr>
                <td>Nama Barang :</td>
                <td><input type="text" name="nama" required></td><br>
            </tr>
            <br>
            <tr>
                <td>Kode Barang   :</td>
                <td><input type="text" name="kode" required></td><br>
            </tr>
            <tr>
                <td>Expired Barang        :</td>
                <td><input type="text" name="expired"id="expired" cols="30" rows="5"></=></td><br>
            </tr>
            <tr>
                <td>Jenis Barang        :</td>
                <td><input type="text" name="jenis"id="jenis" cols="30" rows="5"></=></td><br>
            </tr>
            <tr>
                <td>Deskripsi Barang        :</td>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="5"></textarea></td><br>
            </tr>
            <tr>
                <td>Upload gambar           :</td>
                <td><input type="file" name="gambar"id="gambar" cols="30" rows="5"></=></td><br>
            </tr>
            <td><button type="submit" name="tambah">Tambah</button></td>
            <td><button type="reset" name="reset">Reset</button></td>
        </table>
    </form>
</body>
</html>
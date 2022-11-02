<?php
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM input_barang WHERE id=$id");

$input_barang = [];

while ($row = mysqli_fetch_assoc($result)) {
    $input_barang[] = $row;
}

$dc = $input_barang[0];

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $kode = htmlspecialchars($_POST["kode"]);
    $expired = htmlspecialchars($_POST["expired"]);
    $jenis = htmlspecialchars($_POST["jenis"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);

    $sql = "UPDATE input_barang SET
            nama = '$nama',
            kode = '$kode',
            expired = '$expired',
            jenis = '$jenis',
            deskripsi = '$deskripsi'
            WHERE id = $id";

    $result = mysqli_query ($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'input.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php';
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
    <title>Edit Data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><h1>Edit Data Barang<h1></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama" value="<?php echo $dc["nama"]; ?>" ><br><br></td>
            </tr>
            <td>Kode Barang</td>
                <td><input type="text" name="kode" value="<?php echo $dc["kode"]; ?>"><br><br></td>
            <tr>
                <td>Expired Barang</td>
                <td><input type="text" name="expired" value="<?php echo $dc["expired"]; ?>"><br><br></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td><input type="text" name="jenis" value="<?php echo $dc["jenis"]; ?>" ><br><br></td>
            </tr>
            <tr>
                <td>Deskripsi Barang</td>
                <td><input type="text" name="deskripsi" value="<?php echo $dc["deskripsi"]; ?>" ><br><br></td>
            </tr>
            <tr>
                <td><button type="submit" name="tambah">Edit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index_admin.php");
    exit;
}

require('koneksi.php');

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];

    $result = mysqli_query($conn, "SELECT * FROM input_barang WHERE nama LIKE '%$keyword%'
    OR kode LIKE '%$keyword%' OR expired LIKE '%$keyword%' OR jenis LIKE '%$keyword%'  OR deskripsi LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM input_barang");
}

$input_barang = [];

while ($row = mysqli_fetch_assoc($result)) {
    $input_barang[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Index</title>
    <style>
    </style>
</head>
<body>
    <center>
    <h1>Data Barang</h1>
    <table border=1px>
        <tr>
            <th><b>id</b></th>
            <th><b>nama</b></th>
            <th><b>kode</b></th>
            <th><b>expired</b></th>
            <th><b>jenis</b></th>
            <th><b>deskripsi</b></th>
            <th><b>gambar</b></th>
            <th><b>waktu</b></th>
            <th><b>Opsi</b></th>
        </tr>
        <?php $i = 1; foreach ($input_barang as $dc):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $dc["nama"] ;?></td>
            <td><?php echo $dc["kode"] ;?></td>
            <td><?php echo $dc["expired"] ;?></td>
            <td><?php echo $dc["jenis"];?></td>
            <td><?php echo $dc["deskripsi"];?></td>
            <td><img style="height:50px; width:50px;" src="img.jpg/<?=$dc['gambar']?>"></td>
            <td><?php echo $dc["waktu"];?></td>
            <td><a href="edit.php?id=<?php echo $dc["id"]; ?>" >Edit</a> 
            <a href="hapus.php?id=<?php echo $dc["id"]; ?>" onclick = "return confirm('Apakah Anda yakin ingin menghapus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
        <tr>
        <td colspan="7"><button width="100px"><a href="tambah.php" style="color: black  ">Tambah Data</a></button></td>
        </tr>
    </table>
    <form action="" method="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    </center>
</body>
</html>
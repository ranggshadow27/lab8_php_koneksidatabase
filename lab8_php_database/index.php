<?php
include "koneksi.php";

//query menampilkan data
$database = "SELECT * FROM data_barang";
$print = mysqli_query($conn, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="containers">
        <h2>Data Barang</h2>
        <hr>
            <a href="inputpage.php"><h3>Tambah Barang</h3></a>
            <div class="main">
                <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th class="mini">Harga Jual</th>
                    <th class="mini">Harga Beli</th>
                    <th class="mini">Stok</th>
                    <th class="mini">Aksi</th>
                </tr>
    <?php if($print): ?>
    <?php while($a = mysqli_fetch_array($print)): ?>
    <tr>
        <td><?= $a['gambar'];?></td>
        <td><?= $a['nama_barang'];?></td>
        <td><?= $a['kategori'];?></td>
        <td>Rp. <?= $a['harga_beli'];?></tdclass=>
        <td>Rp. <?= $a['harga_jual'];?></td>
        <td><?= $a['stok'];?></td>
        <td>
            <a href="update.php?id=<?php echo $a['id_barang']; ?>">Edit</a> | 
            <a href="delete.php?id=<?php echo $a['id_barang']; ?>">Hapus</a></td>
    </tr>
    <?php endwhile; else: ?>
    <tr>
        <td colspan="7">Belum ada data</td>
    </tr>
    <?php endif; ?>
    </table>
    </div>
    </div>
</body>
</html>
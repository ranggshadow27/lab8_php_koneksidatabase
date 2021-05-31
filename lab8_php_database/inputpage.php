<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <?php  
    include 'koneksi.php';
    ?>
</head>
<body>
    <div class="container">
        <a href="index.php">KEMBALI</a>
        <h2>Tambah Barang</h2>
        <hr>
        <div class="main">
        <form method="post" action="tambah.php" enctype="multipart/form-data">
            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang">
            </div>
            <div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Mainboard">Mainboard</option>
                    <option value="Processor">Processor</option>
                    <option value="Memori">Memori</option>
                    <option value="Graphic Card">Graphic Card</option>
                </select>
            </div>
            <div class="input">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli">
            </div>
            <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual">
            </div>
            <div class="input">
                <label>Jumlah Stok</label>
                <input type="text" name="stok">
            </div>
            <div class="input">
                <label>Gambar</label>
                <input type="text" name="gambar">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Tambah">
            </div>
        </form>
        </div>
    </div>
</body>
</html>
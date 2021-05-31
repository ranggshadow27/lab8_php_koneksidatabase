<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Barang</title>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$database = mysqli_query($conn,"SELECT * FROM data_barang WHERE id_barang='$id'");
    $d = mysqli_fetch_array($database);
    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
       }    
	?>
</head>
<body>
	<div class="container">
    <a href="index.php">KEMBALI</a>
    <h2>EDIT DATA BARANG</h2>
    <hr>
    		<form method="post" action="updatepage.php">
			<div class="input">
                <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
                <label>Nama Barang</label>
				<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
            </div>
			<div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option <?php echo is_select ('Mainboard', $d['kategori']);?> value="Mainboard">Mainboard</option>
                    <option <?php echo is_select ('Processor', $d['kategori']);?> value="Processor">Processor</option>
                    <option <?php echo is_select ('Memori', $d['kategori']);?> value="Memori">Memori</option>
                    <option <?php echo is_select ('Graphic Card"', $d['kategori']);?> value="Graphic Card">Graphic Card</option>
                </select>
            </div>
            <div class="input">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" value="<?php echo $d['harga_beli']; ?>">
            </div>
            <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" value="<?php echo $d['harga_jual']; ?>">
            </div>
            <div class="input">
                <label>Stok</label>
                <input type="text" name="stok" value="<?php echo $d['stok']; ?>">
            </div>
            <div class="input">
                <label>Gambar</label>
                <input type="text" name="gambar" value="<?php echo $d['gambar']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>
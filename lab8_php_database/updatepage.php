<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $id = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $gambar = $_POST['gambar'];
    
    $database ="UPDATE data_barang SET kategori = '$kategori', nama_barang = '$nama_barang', harga_beli = '$harga_beli', harga_jual= '$harga_jual', stok= '$stok', gambar= '$gambar' WHERE id_barang = '$id'";
    $hasil=mysqli_query($conn, $database);

    header('location: index.php');
}

?>

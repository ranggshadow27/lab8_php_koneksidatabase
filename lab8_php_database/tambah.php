<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $gambar = $_POST['gambar'];
    
    $data ="INSERT INTO data_barang (kategori, nama_barang, harga_beli, harga_jual, stok, gambar) VALUES('$kategori','$nama_barang','$harga_beli','$harga_jual','$stok','$gambar')";
    mysqli_query($conn, $data);
    
    header('location: index.php');
}
?>

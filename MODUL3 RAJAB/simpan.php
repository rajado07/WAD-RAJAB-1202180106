<?php
include 'config.php';
$name = $_POST ['name'];
$deskripsi = $_POST ['deskripsi'];
$gambar = $_POST ['gambar'];
if (isset($_POST['kategori'])){
    $kategori = $_POST['kategori'];
}else {
    $kategori ="Tidak ada";}
$tanggal = $_POST ['tanggal'];
$mulai = $_POST ['mulai'];
$berakhir = $_POST ['berakhir'];
$tempat = $_POST ['tempat'];
$harga = $_POST ['harga'];
if (isset($_POST['benefit'])){
    $benefit = implode(",", $_POST['benefit']);
}else {
    $benefit ="Tidak ada";}


$query = mysqli_query($conn, "INSERT INTO event VALUES('','$name','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");

if ($query > 0) {
    echo "<script>alert('Data Kamu Telah Berhasil Disimpan'); window.location.href='home.php';</script>";
}else{
    echo "<script>alert('Data Kamu Gagal Disimpan');window.location.href='simpan.php';</script>";
}

?>
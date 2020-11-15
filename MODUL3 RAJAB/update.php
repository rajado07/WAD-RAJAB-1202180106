<?php

include 'config.php';
 
    $id = $_POST ['id'];
    $name = $_POST ['name'];
    $deskripsi = $_POST ['deskripsi'];
    $gambar = $_POST ['gambar'];
    $kategori = $_POST ['kategori'];
    $tanggal = $_POST ['tanggal'];
    $mulai = $_POST ['mulai'];
    $berakhir = $_POST ['berakhir'];
    $tempat = $_POST ['tempat'];
    $harga = $_POST ['harga'];
    $benefit = implode(",", $_POST['benefit']);

 
mysqli_query($conn,"update event set name='$name' where id='$id'");
mysqli_query($conn,"update event set deskripsi='$deskripsi' where id='$id'");
mysqli_query($conn,"update event set gambar='$gambar' where id='$id'");
mysqli_query($conn,"update event set kategori='$kategori' where id='$id'");
mysqli_query($conn,"update event set tanggal='$tanggal' where id='$id'");
mysqli_query($conn,"update event set mulai='$mulai' where id='$id'");
mysqli_query($conn,"update event set berakhir='$berakhir' where id='$id'");
mysqli_query($conn,"update event set tempat='$tempat' where id='$id'");
mysqli_query($conn,"update event set harga='$harga' where id='$id'");
mysqli_query($conn,"update event set benefit='$benefit' where id='$id'");

if ($query > 0) {
    echo "<script>alert('Gagal Disimpan');window.location.href='detail.php?id=$id;';</script>";
}else{
    echo "<script>alert('Data telah disimpan'); window.location.href='detail.php?id=$id';</script>";
}


?>
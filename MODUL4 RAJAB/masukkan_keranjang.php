<?php
include ("koneksi.php");

    
    // include database connection file
    if(isset($_POST['submit1'])) {
    $nama_barang = "YUJA NIACIN 30 DAYS BLEMISH CARE SERUM";
    $harga = "169000";
    $result = mysqli_query($koneksi, "INSERT INTO keranjang  VALUES('','$nama_barang','$harga')");
    header("location:index.php?alert=barang_nambah");

   



    }

     elseif(isset($_POST['submit2'])) {
    $nama_barang = "SOMEBYMI sanil Trucecia miracle reapair cream";
    $harga = "180000";
    $result = mysqli_query($koneksi, "INSERT INTO keranjang  VALUES('','$nama_barang','$harga')");
    header("location:index.php?alert=barang_nambah");
    

        }




    if(isset($_POST['submit3'])) {
    $nama_barang = "30 DAYS MIRACLE TONER";
    $harga = "108000";
    $result = mysqli_query($koneksi, "INSERT INTO keranjang  VALUES('','$nama_barang','$harga')");
    header("location:index.php?alert=barang_nambah");
    }
    
     
?>
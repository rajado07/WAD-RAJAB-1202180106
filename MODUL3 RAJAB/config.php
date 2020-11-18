<?php
$dbhost = "localhost:3307";
$dbuser = "root";
$dbname = "modul3_rajab";
$dbpass = "";

$conn =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
or die("Kamu Belum Terkneksi Ke Database, Pastikan User, Password dan Port Sudah Benar.");
?>
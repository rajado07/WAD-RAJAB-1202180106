<?php
$dbhost = "localhost";
$dbuser = "root";
$dbname = "09-rajab";
$dbpass = "";

$conn =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
or die("Kamu Belum Terkneksi Ke Database, Pastikan User, Password dan Port Sudah Benar.");
?>
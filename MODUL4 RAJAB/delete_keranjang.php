<?php
// include database connection file
include ("koneksi.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM keranjang WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:keranjang.php");
?>
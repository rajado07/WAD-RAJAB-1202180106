<?php
include 'config.php';
$id = $_GET['id'];
 
 
mysqli_query($conn,"delete from event where id='$id'");
 
header("location:home.php");
 
?>
<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_desroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:login.php?alert=logout");
?>
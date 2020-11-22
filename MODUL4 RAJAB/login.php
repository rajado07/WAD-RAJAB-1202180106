<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <title>Home Website Find Technician!</title>
</head>

<body>
    <!--Batas TOP NAV-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">WAD Beauty</a>
        <form class="form-inline">
            <a href="login.php"> Login </a>
            <a href="register.php"> Register </a>
        </form>
    </nav>
    <!--Batas TOP NAV-->

    <!--Batas Alert-->

    <?php 
		if(isset($_GET['alert'])){
        
			if($_GET['alert']=="gagal"){
                
				?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Gagal!</h4>
        Coba Masukkan Username Dan Password Yang Benar
    </div>

    <?php
            }


            if($_GET['alert']=="logout"){
                
				?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Anda Sudah Logout</h4>
        Silahkan Login lagi Untuk Mengakses
    </div>

    <?php
            }
    
        }
        
		?>


    <!--Batas Alert-->


    <div class="container">

        <form action="login.php" method="post">
            <div class="form_registrasi shadow bg-white rounded">
                <h4>Form Login </h4>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="p1">
                </div>

                <input type="checkbox" name="remember">
                <label>Remember Me</label><br>

                <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
        Belum Punya Akun ? <a href="register.php">Registrasi</a>
    </div>

    <<?php 
// mengaktifkan session php
 if(isset($_POST['submit'])) {



// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['p1'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where user_email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
session_start();

if($cek > 0){


	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:index.php?alert=berhasil");
    }

    else {
        header("location:login.php?alert=gagal");
    }
 }

?> </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
</body>

</html>
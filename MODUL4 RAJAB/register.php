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
        
			if($_GET['alert']=="berhasil"){
                
				?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Success</h4>
        Berhasil Disimpan
    </div>

    <?php
			}
        }
        
		?>


    <!--Batas Alert-->

    <div class="container">

        <form action="register.php" method="post">
            <div class="form_registrasi shadow bg-white rounded">
                <h4>Form Registrasi </h4>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label>No Telfon</label>
                    <input type="number" class="form-control" name="phone">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="p1">
                </div>

                <div class="form-group">
                    <label>Retype Password</label>
                    <input type="password" class="form-control" name="p2">
                </div>

                <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
        </form>
        Sudah Punya Akun ? <a href="login.php">Login</a>
    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {

        $nama  = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];

        // include database connection file
        include ("koneksi.php");
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO user  VALUES('','$nama','$email','$phone','$p1')");
        // Show message when user added
        header("location:register.php?alert=berhasil");
    }
      
    ?>

    </div>


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
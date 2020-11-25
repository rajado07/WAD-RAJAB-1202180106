	<?php 
	session_star();
	if($_SESSION['status']!="login"){
		header("location:login.php?alert=belum_login");
	}
	?>


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
	            <a href="keranjang.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4"
	                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	                    <path fill-rule="evenodd"
	                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
	                </svg></a>
	            <a>Selamat Datang </a>

	            <div class="dropdown" style="padding-left:10px;">
	                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
	                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    <?php echo $_SESSION['email']; ?>
	                </button>
	                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                    <a class="dropdown-item" href="profile.php">Profile</a>
	                    <a class="dropdown-item" href="logout.php">Logout</a>
	                </div>
	            </div>
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
	        <h4><i class="icon fa fa-check"></i> Success !</h4>
	        Silahkan Belanja
	    </div>

	    <?php
            }
            

            elseif($_GET['alert']=="barang_nambah"){
                
				?>
	    <div class="alert alert-warning alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <h4><i class="icon fa fa-check"></i> Berhasil !</h4>
	        Barang Sudah Di Tambah, Cek Keranjang Anda
	    </div>

	    <?php
			}
        }
        
		?>


	    <!--Batas Alert-->

	    <div class="index container">
	        <div class="row">

	            <div class="col-12" style="text-align:center;">
	                <h3>WAD Beauty</h3>
	                Tersedia skin care dengan harga murah tapi ga murahan dan berkualitas.
	            </div>
	            <div class="col-4">

	                <div class="card">
	                    <img src="gambar/1.jpg" class="card-img-top">
	                    <div class="card-body">
	                        <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
	                        <p class="card-text"> Produk terbaru dari somebymi yang memiliki manfaat untuk whitening +
	                            blemish care + Anti-wrinkle, sangat recomended untuk masalah kulit kusam, kulit kering
	                            dan
	                            berkas jerawat atau FLEK hitam.</p>
	                        <hr>
	                        <h6>RP 169.000</h6>
	                        <form action="masukkan_keranjang.php" method="post">
	                            <button type="submit" name="submit1" class="btn btn-primary">Masukkan Keranjang</button>
	                        </form>
	                    </div>
	                </div>
	            </div>



	            <div class="col-4">
	                <div class="card">
	                    <img src="gambar/2.jpg" class="card-img-top">
	                    <div class="card-body">
	                        <h5 class="card-title">SOMEBYMI sanil Trucecia miracle reapair cream</h5>
	                        <p class="card-text"> Sebagai pelembbab krim ini mampu memberikan kelembapan yang menyeluruh
	                            dan tahan lama bagi kulit, sehingga terasa halus, lembab dan kenyal. Mencerahkan, mengambat
	                            penuan seperti keriput dan garis halus, juga menenagkan kulit yang iritasi, dengan
	                            kandungan 4200 ppm snail turecica..</p>
	                        <hr>
	                        <h6>RP 180.000</h6>
	                        <form action="masukkan_keranjang.php" method="post">
	                            <button type="submit" name="submit2" class="btn btn-primary">Masukkan Keranjang</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="col-4">
	                <div class="card">
	                    <img src="gambar/3.jpg" class="card-img-top">
	                    <div class="card-body">
	                        <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
	                        <p class="card-text"> Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat
	                            kulit lebih bersih dan lebih bersinar, mengandung 10.000 ppm ekstrak pohon teh alami yang
	                            secara edektif meningkatkan elsatisitas dan menutrusi kulit anda tanpa efek iritasi karenan
	                            mengandung 20 bahan 500 dan pewarna berbahaya.</p>
	                        <hr>
	                        <h6>RP 108.000</h6>
	                        <form action="masukkan_keranjang.php" method="post">
	                            <button type="submit" name="submit3" class="btn btn-primary">Masukkan Keranjang</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>






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
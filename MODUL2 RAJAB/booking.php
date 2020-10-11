<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>TP MOD 2 Booking</title>
        <!--Membuat Style CSS-->
        <style>
            a {
                padding-left: 10px;
                margin-top: 10px;
                color: cornsilk;
            }

            img {
                width: 400px;
            }

            h2 {
                text-align: center;
            }

            h4 {
                text-align: center;
            }
        </style>
    </head>

    <body> 

    <!--Top Nav-->

    <div class="nav container-fluid " style="height: 50px; background-color: darkcyan; justify-content: center; ">
         <a  href="index.php" >HOME</a>
         <a href="booking.php">BOOKING</a>
    </div>

    <?php

    
    // Membuat Jika Ada Warning Tidak Perlu Di Display Di Halaman Nya //
    error_reporting(error_reporting() & ~E_NOTICE) ; 
    
    // Mendapatkan Value Dari Submit Melalui Get, Lalu Menamakan Variabel nya Menjadi $submit //
    $submit=$_GET['submit'];

    // Jika $submit nilai nya kosong, maka di tambahkan 1 biar ada value default, berguna untuk jika langsung pencet Booking. B //
    if (empty($submit)) {
      $submit += 1;

    }

    ?>

    <br>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-6">
                <!--Membuat Form Dengan Metode POST-->
                <form action="myBooking.php" method="POST">

                  <div class="form-group">
                    <label >Name</label>
                    <input type="input" class="form-control" name="name" >
                  
                  <div class="form-group">
                    <label>Check In</label>
                    <input type="date" class="form-control" name="date" >
                  </div>

                  <div class="form-group">
                    <label >Durasi</label>
                    <input type="input" class="form-control" name="duration">
                    <small id="durasiHelp" class="form-text text-muted">Days(s)</small>
                  </div>

                  <label class="my-1 mr-2" for="label">Room Type</label>

                  <select class="custom-select my-1 mr-sm-2"  name="roomType">
                    <!--Membuat Pilihan Auto Kepilih Jika Pencet Book Now -->
                    <option <?php if($submit == '1'){echo("selected");}?> value="1" >Standard</option>
                    <option <?php if($submit == '2'){echo("selected");}?> value="2" >Superior</option>
                    <option <?php if($submit == '3'){echo("selected");}?> value="3" >Luxury</option>

                  </select>

                  <br>
                  
                  <label class="my-1 mr-2" for="label">Add Service(s)</label><br>
                  <label class="my-1 mr-2" for="label"> $25/Service</label>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="roomService" >
                    <label class="form-check-label" >
                      Room Service
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="breakFast" >
                    <label class="form-check-label" >
                      Breakfast
                    </label>
                  </div>

                  <div class="form-group">
                  <label >Phone Number </label>
                  <input type="input" class="form-control" name="phone" >
                  </div>

                  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>

                </form>
            </div>
          </div>

            <div class="col-sm-6">
            
                <?php

                // Nama gambar sesui dengan value yang di submit, agar gambar berubah automatis //
                echo "<img src=' $submit.jpg' "; 

                ?>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>

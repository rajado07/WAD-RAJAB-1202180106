<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>TP MOD 2 My Booking </title>
        
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

    <br>

    <!--Mendefinisikan semua variabel yang di dapatkan dari halaman booking-->

    <?php 

    // Membuat Jika Ada Warning Tidak Perlu Di Display Di Halaman Nya //
    error_reporting(error_reporting() & ~E_NOTICE) ;

    // Mendefinisikan variabel yang di dapatkan dari halaman booking //
    $name= $_POST["name"];
    $date= $_POST["date"];
    $duration=$_POST["duration"];
    $roomType=$_POST["roomType"];
    $phone=$_POST["phone"];
    $breakFast=$_POST["breakFast"];
    $roomService=$_POST["roomService"];

    //Mendefinisikan Variabel Harga //
    $priceStan = 96; 
    $priceSup = 150 ;
    $priceLux = 200 ;

    // Menjumlahkan hari sesuai dengan varibale $duration //
    $tglCheckout = date('Y-m-d', strtotime('+'.$durasi .'days', strtotime($date))); 

    ?>


    <div class="container" style="margin-top: 20px;">

        <div class="row">
            <div class="col-sm-12">

                <table class="table">
                    <thead>
                      <tr>
                        <!--Membuat Tabel Head Beserta Isi Nya-->
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-In</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Total Price</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <!--Membuat isi tabel sesuai dengan data yang di dapatkan dari halaman booking-->
                        <th><?php echo rand();?></th>
                        <td><?php echo $name;?></td>
                        <td><?php echo $date;?></td>
                        <td><?php echo $tglCheckout;?></td>
                        <td><?php
                        
                        // Membuat pengkondisian untuk jenis kamar yang dipilih //
                                if ($roomType ==1) {
                                    Echo " Standard" ;
                                }
                                
                                if($roomType ==2 ) {

                                    Echo "Superior" ;

                                }

                                if($roomType ==3 ) {

                                    Echo "Luxury" ;

                                }
                                
                                ?></td>

                        <td><?php echo $phone;?></td>
                        <td><?php 
                        
                        // Membuat pengkondisian untuk service yang dipilih ataupun tidak, serta menambahkan biaya nya jika menggunakan service //
                                if ($breakFast == 1) {
                                    echo " <ul><li> Break Fast </li> </ul> " ;
                                    $priceStan += 20 ;
                                    $priceSup += 20 ;
                                    $priceLux += 20 ;

                                }

                                if ($roomService == 1) {
                                    echo " <ul><li> Room Service </li> </ul> " ;
                                    $priceStan += 20 ;
                                    $priceSup += 20 ;
                                    $priceLux += 20 ;

                                }
                        
                        // Jika tidak Memilih Keduanya Maka Cukup Dituliskan No Service //
                                elseif (empty($breakFast) && (empty($roomService)) ) {
                                    echo " No Service " ;
                                }
                                ?></td>

                        <td><?php 
                        
                        // Membuat Harga Total Akhir Yang Harus Di Bayarkan //
                                if ($roomType ==1) {
                                     Echo "$ $priceStan " ;
                                    }                        
                        
                                if($roomType ==2 ) {
                                    Echo "$ $priceSup " ;
                                    }

                                 if($roomType ==3 ) {
                                     Echo "$ $priceLux " ;
                                     }
                        ?></td>
                      </tr>
                    </tbody>
                  </table>

            </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>

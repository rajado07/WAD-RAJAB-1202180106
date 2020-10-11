<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        
        <title>TP MOD 2 HOME </title>

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

     <!--Heading-->

    <h1 align="center"> EAD HOTEL</h1>
    <h2 align="center"> Welcome To 5 Star Hotel! </h2>

    <div class="container" style="margin-top: 20px;">

        <div class="row">

            <div class="col-sm-4 1">
                <!--Membuat Card-->
                <div class="card" style="width: 18rem;">
                    <img src="1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text" > <h2> Standard</h2> <br> <h4 style="color: darkcyan;"> $96/Day </h4><hr>
                        
                        <form action="booking.php" method="GET">
  
                            <label for="name">Fascilites</label><hr>

                            <label for="name">1 Single Bed</label><hr>
                              
                            <label for="name">1 Bathroom</label><hr>

                            <button type="submit" value="1" name="submit" class="btn btn-primary">Book Now</button>  
                              </p>
                          </form>
                          </p>
                    </div>
                  </div>
            </div>


            <div class="col-sm-4 2">
                <!--Membuat Card-->
                <div class="card" style="width: 18rem;">
                    <img src="2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text" > <h2> Superior</h2> <br> <h4 style="color: darkcyan;"> $150/Day </h4><hr>
                        
                      <form action="booking.php" method="GET">
  
                     <label for="name">Fascilites</label><hr>

                     <label for="name">1 Double Bed</label><hr>
    
                      <label for="name">1 Television and Wi-Fi</label><hr>

                      <label for="name">1 Bathroom with hot water</label><hr>

                       <button type="submit" value="2" name="submit" class="btn btn-primary">Book Now</button>
                        </form>
                        </p>  
                    </div>
                  </div>
            </div>

            <div class="col-sm-4 3">
                <!--Membuat Card-->
                <div class="card" style="width: 18rem;">
                    <img src="3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text" > <h2> Luxury</h2> <br> <h4 style="color: darkcyan;"> $200/Day</h4><hr>
                   
                      <form action="booking.php" method="GET">
  
                      <label for="name">Fascilites</label><hr>

                     <label for="name">2 Double Bed</label><hr>

                      <label for="name">2 Bathroom with hot water</label><hr>

                      <label for="name">1 Kitchen</label><hr>

                      <label for="name">1 Television and Wi-Fi</label><hr>

                      <label for="name">1 Workroom </label><hr>

                       <button type="submit" value="3" name="submit" class="btn btn-primary">Book Now</button>
                        </form>
                        </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>

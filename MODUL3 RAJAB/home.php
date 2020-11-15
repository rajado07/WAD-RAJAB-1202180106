<!doctype html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/051f462af8.js" crossorigin="anonymous"></script>
<html lang="en">

<head>
    <title>HOME</title>
</head>

<body style="background-color: #F8F9FB">
    <nav class="navbar navbar-primary" style="background-color: #0077B6">
        <a class="navbar-brand" style="color: white; ">EAD EVENTS</a>
        <form action="buatEvent.php" class="form-inline">
            <a class="navbar-text-right" href="home.php" style="color: white;  margin-right: 15px;">Home</a>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style=" margin-right: 15px;">Buat Event
            </button>
        </form>
    </nav>
    <p>

    <h4 class="text-center" style="color: #0077B6; text-center">WELCOME TO EAD EVENTS</h4><br><br>
    <div class="row">
        <?php
    include 'config.php';
    $no = 0;
    $data = mysqli_query($conn, "select * from event");
    if ($no === mysqli_num_rows($data)) {
        ?>
        <div class="col-sm-2">
            <p class="text-center" style="color: #0077B6; text-center"><b>Tidak ada event di
                    temukan</b></p>
        </div>
        <?php
    } else {
        while ($d = mysqli_fetch_array($data)) {
            ?>
        <div class="col-sm-2">
            <div class="card shadow p-3 mb-5 bg-white rounded"
                style="width: 15rem; margin-left: 300px; margin-bottom:50px;">
                <img src="gambar/<?php echo $d['gambar']; ?>" class="card-img-top" alt="events">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $d['name']; ?></h5>
                    <p class="card-text"><i class="fa fa-calendar"
                            style="color: orange;"></i><?php echo $d['deskripsi']; ?></p>
                    <p class="card-text"><i class="fa fa-map-marker"
                            style="color: orange;"></i><?php echo $d['tanggal']; ?></p>
                    <p class="card-text"><?php echo $d['tempat']; ?></p>
                    <p class="card-text">Kategori : Event <?php echo $d['kategori']; ?></p>
                </div>
                <div class="card-footer ">
                    <a name="edit" id="edit" class="btn btn-primary btn-sm float-right"
                        href="detail.php?id=<?php echo $d['id']; ?>">Detail</a>
                </div>
            </div>
        </div>
        <?php
        }
    }
    ?>

    </div>
</body>

</html>
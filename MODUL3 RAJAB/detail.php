<!doctype html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>HOME</title>
</head>

<body>
    <nav class="navbar navbar-primary" style="background-color: #0077B6">
        <a class="navbar-brand" style="color: white; ">EAD EVENTS</a>
        <form action="buatEvent.php" class="form-inline">
            <a class="navbar-text-right" href="home.php" style="color: white;  margin-right: 15px;">Home</a>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="margin-right: 15px;">Buat Event
            </button>
        </form>
    </nav>
    <p>
    <h4 class="text-center" style="color: #0077B6;  text-center">Detail Event</h4><br>
    <?php
include 'config.php';
$no = 1;
$id = $_GET['id'];
$data = mysqli_query($conn, "select * from event where id='$id'");
$d = mysqli_fetch_array($data)
?>
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem; margin-left: 450px; margin-bottom: 100px;">
        <img src="gambar/<?php echo $d['gambar']; ?>" class="card-img-top" alt="events">
        <div class="card-body">
            <h5 class="card-title"><?php echo $d['name']; ?></h5>
            <p class="card-text"><b>Deskripsi</b></p>
            <p class="card-text"><?php echo $d['deskripsi']; ?></p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=""><b>Informasi Event</b></label>
                    <p class="card-text"><i class="fa fa-calendar" style="color: orange;margin-right:10px;"></i>
                        <?php echo $d['tanggal']; ?></p>
                    <p class="card-text"><i class="fa fa-map-marker" style="color: orange;margin-right:10px;"></i>
                        <?php echo $d['tempat']; ?></p>
                    <p class="card-text"><i class="fa fa-clock-o" style="color: orange;margin-right:10px;"></i>
                        <?php echo $d['mulai']; ?> - <?php echo $d['berakhir']; ?></p>

                    <p class="card-text"><b>Kategori </b><?php echo $d['kategori']; ?>
                    <p class="card-text"><b>HTM : Rp. </b><?php echo $d['harga']; ?>,-
                </div>
                <div class="form-group col-md-6">
                    <label for=""><b>Benefit</b></label>
                    <ul>
                        <li><?php echo $d['benefit']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="text text-center">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Edit
                </button>
                <a name="hapus" id="hapus" class="btn btn-danger btn-sm"
                    href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>


            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Content Event </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card" style="margin-left: 30px; margin-bottom:30px; ">
                                    <div class="card-header bg-danger"></div>
                                    <div class="card-body">
                                        <form action="update.php" method="post">
                                            <div class="form-group">
                                                <label for="InputNama">Name</label>
                                                <input type="input" name="name" class="form-control" id="nama"
                                                    aria-describedby="namaHelp" value="<?php echo $d['name']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Textarea">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" id="deskripsi"
                                                    rows="5"><?php echo $d['deskripsi']; ?></textarea>
                                            </div>

                                            <label for="upload">Upload Gambar</label><br>
                                            <div class="custom-file">
                                                <input type="file" value="<?php echo $d['gambar']; ?>" name="gambar"
                                                    class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <p><br>

                                            <div class="form-group">
                                                <label for="radioButton">Kategori</label><br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" value="Online" id="customRadioInline1"
                                                        name="kategori" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline1">Online</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" value="Offline" id="customRadioInline2"
                                                        name="kategori" class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline2">Offline</label>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="card" style="margin-right: 30px; margin-bottom:30px; ">
                                    <div class="card-header bg-primary"></div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="checkin">Tanggal</label>
                                            <input class="form-control" id="tanggal"
                                                value="<?php echo $d['tanggal']; ?>" name="tanggal" type="date">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Jam Mulai</label>
                                                <input class="form-control" type="time"
                                                    value="<?php echo $d['mulai']; ?>" name="mulai" id="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Jam Selesai</label>
                                                <input class="form-control" type="time"
                                                    value="<?php echo $d['berakhir']; ?>" name="berakhir" id="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputTempat">Tempat</label>
                                            <input type="input" name="tempat" class="form-control"
                                                value="<?php echo $d['tempat']; ?>" id="tempat"
                                                aria-describedby="namaHelp">
                                        </div>

                                        <div class="form-group">
                                            <label for="InputHarga">Harga</label>
                                            <input type="input" name="harga" class="form-control"
                                                value="<?php echo $d['harga']; ?>" id="harga"
                                                aria-describedby="namaHelp">
                                        </div>

                                        <label for="checkboxButton">Benefit</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="benefit[]" type="checkbox"
                                                id="inlineCheckbox1" value="Snack">
                                            <label class="form-check-label">Snack</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="benefit[]" type="checkbox"
                                                id="inlineCheckbox2" value="Sertifikat">
                                            <label class="form-check-label">Sertifikat</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="benefit[]" type="checkbox"
                                                id="inlineCheckbox3" value="Souvenir">
                                            <label class="form-check-label">Souvenir</label>
                                        </div>
                                        <p>

                                        <div class="text text-right">
                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button class="btn btn-primary btn-sm" name="id"
                                                value="<?php echo $d['id']; ?>" type="submit">Submit
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
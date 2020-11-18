<!doctype html>



<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>

    </style>

    <title>Membuat Event</title>
</head>

<body>

    <nav class="navbar navbar-primary" style="background-color: #0077B6">
        <a class="navbar-brand" style="color: white; ">EAD EVENTS</a>
        <form action="buatEvent.php" class="form-inline">
            <a class="navbar-text-right" href="home.php" style="color: white;  margin-right: 15px;">Home</a>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style=" margin-right: 15px;">Buat Event
            </button>
        </form>
    </nav>

    <p>
    <h4 class="text text-center">Buat Event</h4><br>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="margin-left: 30px; margin-bottom:30px; ">
                <div class="card-header bg-danger"></div>
                <div class="card-body">
                    <form action="simpan.php" method="post">
                        <div class="form-group">
                            <label for="InputNama">Name</label>
                            <input type="input" name="name" class="form-control" id="nama" aria-describedby="namaHelp">
                        </div>
                        <div class="form-group">
                            <label for="Textarea">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5"></textarea>
                        </div>

                        <label for="upload">Upload Gambar</label><br>
                        <div class="custom-file">
                            <input type="file" name="gambar" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <p><br>

                        <div class="form-group">
                            <label for="radioButton">Kategori</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Online" id="customRadioInline1" name="kategori"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Online</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Offline" id="customRadioInline2" name="kategori"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Offline</label>
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
                        <input class="form-control" id="tanggal" name="tanggal" type="date">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Jam Mulai</label>
                            <input class="form-control" type="time" name="mulai" id="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Jam Selesai</label>
                            <input class="form-control" type="time" name="berakhir" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputTempat">Tempat</label>
                        <input type="input" name="tempat" class="form-control" id="tempat" placeholder="Zoom" readonly
                            value="Zoom">
                    </div>

                    <div class="form-group">
                        <label for="InputHarga">Harga</label>
                        <input type="phone" name="harga" class="form-control" id="harga" aria-describedby="namaHelp">
                    </div>

                    <label for="checkboxButton">Benefit</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="benefit[]" type="checkbox" id="inlineCheckbox1"
                            value="Snack">
                        <label class="form-check-label">Snack</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="benefit[]" type="checkbox" id="inlineCheckbox2"
                            value="Sertifikat">
                        <label class="form-check-label">Sertifikat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="benefit[]" type="checkbox" id="inlineCheckbox3"
                            value="Souvenir">
                        <label class="form-check-label">Souvenir</label>
                    </div>
                    <p>

                    <div class="text text-right">
                        <a class="btn btn-danger btn-sm" href="home.php">Cancel</a>
                        <button class="btn btn-primary btn-sm" type="button">Submit</button>
                    </div>
                    </form>
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
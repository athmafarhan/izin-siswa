<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rekap</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="padding-top: 15px; padding-bottom: 15px"></div>
        <form action="insert.php" method="POST">
            <div class="card">
                <div class="card-header">
                    Form Izin Siswa
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <label for="inputNamaSiswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-4">
                            <input class="form-control" id="inputIzinNama" name="inputIzinNama" placeholder="Tulis Nama Siswa">
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-4">
                            <select class="form-control" id="inputIzinKelas" name="inputIzinKelas">
                                <option>Pilih Kelas</option>
                                <option>X IPA 1</option>
                                <option>X IPA 2</option>
                                <option>X IPA 3</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <label for="inputGuru" class="col-sm-2 col-form-label">Guru Mengizinkan</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-4">
                            <select class="form-control" id="inputIzinGuru" name="inputIzinGuru">
                                <option>Pilih Guru</option>
                                <option>Agus S</option>
                                <option>Agus I</option>
                                <option>Agus W</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <label for="inputKeperluan" class="col-sm-2 col-form-label">Keperluan</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-4">
                            <textarea class="form-control" id="inputIzinKeperluan" name="inputIzinKeperluan" rows="4"
                                placeholder="Tulis Keperluan"></textarea>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-2 col-form-label"></div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>

        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
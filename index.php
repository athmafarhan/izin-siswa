<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Hello, world!</title>
</head>
<?php
$username = "root";
$password = "";
$database = "latihan";
$connect = new mysqli("localhost", $username, $password, $database);
if ($connect) { } else {
    echo "connection failed";
    exit();
}

$query = "SELECT * FROM rekap_izin_siswa";
?>



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
        <form>
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            Rekap Izin Siswa
                        </div>
                        <div class="col-4" style="text-align: end">
                            <button class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;<a href="new/" style="color: white">Input Baru</a></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal dan Waktu</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Keperluan</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if ($result = $connect->query($query)) {
                                while ($row = $result->fetch_assoc()) {
                                    $field1name = $row["izin.id"];
                                    $field2name = $row["izin.tanggal_waktu"];
                                    $field3name = $row["izin.nama"];
                                    $field4name = $row["izin.kelas"];
                                    $field5name = $row["izin.guru"];
                                    $field6name = $row["izin.keperluan"];

                                    echo '<tr> 
                                              <td>' . $field1name . '</td> 
                                              <td>' . $field2name . '</td> 
                                              <td>' . $field3name . '</td> 
                                              <td>' . $field4name . '</td> 
                                              <td>' . $field5name . '</td> 
                                              <td>' . $field6name . '</td> 
                                              <td><button class="btn btn-success" a href="edit'.$field1name.'">Edit</td>
                                          </tr>';
                                }
                                $result->free();
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
$idSiswa = $_POST['varname'];
$username = "root";
$password = "";
$database = "latihan";
$connect = new mysqli("localhost", $username, $password, $database);
if ($connect) { } else {
    echo "connection failed";
    exit();
}

$query = "SELECT * FROM rekap_izin_siswa WHERE id=$idSiswa";
echo $idSiswa;
echo $query;

?>
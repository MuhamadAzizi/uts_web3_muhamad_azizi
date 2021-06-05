<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "uts_web3_muhamad_azizi";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn) {
    echo "Koneksi gagal";
}

?>
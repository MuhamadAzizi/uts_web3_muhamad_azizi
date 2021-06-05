<?php

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$hobi = $_POST["hobi"];
$agama = $_POST["agama"];

// Tanggal lahir
$tahun = $_POST["tahun"];
$bulan = $_POST["bulan"];
$tanggal = $_POST["tanggal"];
$tgl_lahir = "$tahun-$bulan-$tanggal";

$no = $_POST["no"]; // Ambil dari post
$get_no = $_GET["no"]; // Ambil dari get
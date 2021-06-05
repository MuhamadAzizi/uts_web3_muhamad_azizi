<?php

include "koneksi.php";

$get_no = $_GET["no"];

$sql = "DELETE FROM t_mahasiswa WHERE no='$get_no'";
$query = mysqli_query($conn, $sql);

if($query) {
    header("location: index.php");
} else {
    echo "Data gagal dihapus";
}

?>
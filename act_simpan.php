
<?php

//act_simpan.php
include "koneksi.php";
include "variables.php";

$sql = "INSERT INTO t_mahasiswa VALUES('', '$nama', '$alamat', '$jenis_kelamin', '$hobi', '$agama', '$tgl_lahir')";

$query = mysqli_query($conn, $sql);

if($query){
    header('Location: index.php');
}else{
    echo "Data GAGAL dimasukkan";
}
  
?>

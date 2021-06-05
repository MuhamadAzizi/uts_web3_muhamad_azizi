<?php 

include "koneksi.php";
include "variables.php";

$sql = "UPDATE t_mahasiswa
        SET 
            nama='$nama',
            alamat='$alamat',
            jenis_kelamin='$jenis_kelamin',
            hobi='$hobi',
            agama='$agama',
            tgl_lahir='$tgl_lahir'
        WHERE no='$no'";

$query = mysqli_query($conn, $sql);

if($query) {
    header("Location: index.php");
} else {
    echo "Gagal mengubah data";
}

?>
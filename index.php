<?php
include "koneksi.php";

$sql ="SELECT * FROM t_mahasiswa";
$query = mysqli_query($conn ,$sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Utama</title>
        <?php include "bootstrap.php"; ?>
    </head>
    <body>
        <div class="container mt-5">
            <a href="form_tambah.php" class="btn btn-success"> + Tambah</a>
            <table class="table table-bordered table my-2">
                <tr class="table-secondary">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                    <th>Agama</th>
                    <th>Tgl Lahir</th>
                    <th colspan='2' class="text-center">Action</th>
                </tr>

            <?php
            $nomor = 1;
            while($row = mysqli_fetch_assoc($query) ){
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['hobi']; ?></td>
                    <td><?php echo $row['agama']; ?></td>
                    <td><?php echo $row['tgl_lahir']; ?></td>
                    <td class="text-center"><a href="form_edit.php?no=<?php echo $row['no']; ?>" class="btn btn-primary">Edit</a></td>
                    <td class="text-center"><a onClick="javascript: return confirm('Data akan dihapus');" href="act_hapus.php?no=<?php echo $row['no']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </body>
</html>
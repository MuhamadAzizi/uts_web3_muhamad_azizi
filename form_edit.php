<?php

include "koneksi.php";

$get_no = $_GET["no"];

$sql = "SELECT * FROM t_mahasiswa WHERE no='$get_no'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>

<html>
    <head>
        <title>Form Edit Data</title>
        <?php include "bootstrap.php"; ?>
    </head>
    <body>
        <div class="container mt-5">
            <h1>Form Edit Data</h1>
            <form action="act_edit.php" method="POST">
                <input type="hidden" name="no" value="<?php echo $row['no']; ?>">
                <table class="table ">
                <tr>
                    <div class="form-group">
                        <td><label for="nama">Nama</label></td>
                        <td><input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="alamat">Alamat</label></td>
                        <td><textarea name="alamat" id="alamat"><?php echo $row["alamat"]; ?></textarea></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                        <td><div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L" id="L" <?php if($row["jenis_kelamin"] == "L") { echo "Checked"; } ?>>
                            <label for="L">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="P" id="P" <?php if($row["jenis_kelamin"] == "P") { echo "Checked"; } ?>>
                            <label for="P">Perempuan</label></td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="hobi">Hobi</label></td>
                        <td><input type="text" name="hobi" value="<?php echo $row['hobi']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="agama">Agama</label></td>
                        <td><input type="text" name="agama" value="<?php echo $row['agama']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="tgl_lahir">Tgl Lahir</label></td>
                        <td><label for="tgl_lahir">Tahun</label><br/>
                        <input type="text" name="tahun" value="<?php echo date('Y', strtotime($row['tgl_lahir'])); ?>"></td>
                        <td><label for="tgl_lahir">Bulan</label><br/>
                        <input type="text" name="bulan" value="<?php echo date('m', strtotime($row['tgl_lahir'])); ?>"></td>
                        <td><label for="tgl_lahir">Tanggal</label><br/>
                        <input type="text" name="tanggal" value="<?php echo date('d', strtotime($row['tgl_lahir'])); ?>"></td>
                    </div>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="Submit" value="Simpan">
                    <input class="btn btn-danger" type="reset" value="Reset"></td>
                </tr>
                </table>
            </form>
        </div>
    </body>
</html>

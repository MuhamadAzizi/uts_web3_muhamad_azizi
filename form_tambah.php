<html>
    <head>
        <title>Form Tambah Data</title>
        <?php include "bootstrap.php"; ?>
    </head>
    <body>
    <div class="container mt-5">
            <h1>Form Tambah Data</h1>
            <form action="act_simpan.php" method="POST">
                <input type="hidden" name="no">
                <table class="table ">
                <tr>
                    <div class="form-group">
                        <td><label for="nama">Nama</label></td>
                        <td><input type="text" name="nama" id="nama"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="alamat">Alamat</label></td>
                        <td><textarea name="alamat" id="alamat"></textarea></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                        <td><div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L" id="L">
                            <label for="L">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="P" id="P">
                            <label for="P">Perempuan</label></td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="hobi">Hobi</label></td>
                        <td><input type="text" name="hobi"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="agama">Agama</label></td>
                        <td><input type="text" name="agama"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="tgl_lahir">Tgl Lahir</label></td>
                        <td><label for="tgl_lahir">Tahun</label><br/>
                        <input type="text" name="tahun"></td>
                        <td><label for="tgl_lahir">Bulan</label><br/>
                        <input type="text" name="bulan"></td>
                        <td><label for="tgl_lahir">Tanggal</label><br/>
                        <input type="text" name="tanggal"></td>
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

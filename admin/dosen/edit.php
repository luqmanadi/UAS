<?php

require_once '../layout/top.php';

$id_dosen = $_GET['id_dosen'];
$dataDosen = getDosen($connection,$id_dosen);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Dosen</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <!-- // Form -->
                    <form action="./store.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td>ID Dosen</td>
                                <td><input class="form-control" type="number" name="id_dosen" size="20" readonly value="<?= $dataDosen['id_dosen'] ?>"></td>
                            </tr>

                            <tr>
                                <td>Nama Dosen</td>
                                <td><input class="form-control" type="text" name="nama" size="20" required></td>
                            </tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <select class="form-control" name="jenkel" id="jenkel" required>
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td colspan="3"><textarea class="form-control" name="alamat" id="alamat"
                                        required></textarea></td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                                    <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                                </td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require_once '../layout/bottom.php';
?>
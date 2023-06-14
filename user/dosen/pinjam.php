<?php

require_once 'layout/top.php';


?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peminjaman Ruangan</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>

    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Formulir</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- // Form -->
                    <form action="../aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="nama" class="form-label">Nama Lengkap</label></td>
                                <td><input class="form-control" type="text" name="nama" id="nama" size="50" required>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="id_user" class="form-label">ID User</label></td>
                                <td><input class="form-control" type="text" name="id_user" id="id_user" size="50" readonly
                                        required></td>

                            </tr>

                            <tr>
                                <td><label for="id_ruangan" class="form-label">ID Ruangan</label></td>
                                <td><input class="form-control" type="text" name="id_ruangan" id="id_ruangan" size="50" readonly
                                        required></td>
                            </tr>

                            <tr>
                                <td><label for="waktu" class="form-label">Waktu</label></td>
                                <td><input class="form-control" type="time" name="waktu" id="waktu" size="50" required>
                                </td>

                            </tr>

                            <tr>
                                <td><label for="tanggal" class="form-label">Tanggal</label></td>
                                <td><input class="form-control" type="date" name="tanggal" id="tanggal" size="50" required>
                                </td>

                            </tr>

                            <tr>
                                <td><label for="keperluan" class="form-label">Keperluan</label></td>
                                <td><input class="form-control" type="textarea" name="keperluan" id="keperluan" size="50"
                                        required>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="submit-pinjam" value="Submit">
                                    <input class="btn btn-danger" type="reset" name="batal" value="Batalkan">
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
require_once 'layout/bottom.php';
?>
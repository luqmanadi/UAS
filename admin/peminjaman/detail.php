<?php

require_once '../layout/top.php';
$id_peminjaman = $_GET['id_peminjaman'];
$dataPeminjaman = getPeminjaman($connection,$id_peminjaman);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peminjaman </h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Detail Peminjaman</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>ID Peminjaman</td>
                                <td>:</td>
                                <td>
                                    <?= $dataPeminjaman['id_peminjaman'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>
                                    <?= $dataPeminjaman['nama'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Ruangan</td>
                                <td>:</td>
                                <td>
                                    <?= $dataPeminjaman['id_ruangan'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Keperluan</td>
                                <td>:</td>
                                <td>
                                    <?= $dataPeminjaman['keperluan'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>:</td>
                                <td>
                                    <?= $dataPeminjaman['waktu'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>
                                    <?= $dataPeminjaman['tanggal'] ?>
                                </td>
                            </tr>

                        </table>
                    </div>
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
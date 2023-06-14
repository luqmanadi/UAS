<?php

require_once 'layout/top.php';
$id_ruangan= $_GET['id_ruangan'];
$ruang = getRuangan($connection, $id_ruangan)
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ruangan</h1>
        <a href="ruangan.php" class="btn btn-primary">Kembali</a>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Detail Informasi Ruangan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>ID Ruangan</td>
                                <td>:</td>
                                <td>
                                    <?= $ruang['id_ruangan'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    <?= $ruang['status'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kapasitas</td>
                                <td>:</td>
                                <td>
                                    <?= $ruang['kapasitas'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td>
                                    <?= $ruang['kategori'] ?>
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
require_once 'layout/bottom.php';
?>
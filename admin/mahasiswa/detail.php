<?php

require_once '../layout/top.php';
$id_mhs= $_GET['id_mhs'];
$dataMahasiswa = getMahasiswa($connection, $id_mhs);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Detail Profile Mahasiswa</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>ID Mahasiswa</td>
                                <td>:</td>
                                <td>
                                    <?= $dataMahasiswa['id_mhs'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>
                                    <?= $dataMahasiswa['nama'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>
                                    <?= $dataMahasiswa['username'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>
                                    <?= $dataMahasiswa['password'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <?= $dataMahasiswa['email'] ?>
                                </td>
                            </tr>
    
                            <tr>
                                <td>No HP</td>
                                <td>:</td>
                                <td>
                                    <?= $dataMahasiswa['no_hp'] ?>
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
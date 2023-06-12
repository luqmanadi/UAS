<?php

require_once '../layout/top.php';

$id_ormawa = $_GET['id_ormawa'];
$dataOrmawa = getOrmawa($connection, $id_ormawa);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Organisasi Mahasiswa</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Edit Data Ormawa</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- // Form -->
                    <form action="../aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="id_ormawa" class="form-label">ID Ormawa</label></td>
                                <td><input class="form-control" type="number" name="id_ormawa" id="id_ormawa" size="20" readonly value="<?= $dataOrmawa['id_ormawa'] ?>"></td>
                                </tr>
    
                                <tr>
                                    <td><label for="nama" class="form-label">Nama Lengkap</label></td>
                                    <td><input class="form-control" type="text" name="nama" id="nama" size="20" required value="<?= $dataOrmawa['nama'] ?>"></td>
                                </tr>
    
                                <tr>
                                    <td><label for="username" class="form-label">Username</label></td>
                                    <td><input class="form-control" type="text" name="username" id="username" size="20" required value="<?= $dataOrmawa['username'] ?>"></td>
                                
                            </tr>

                            <tr>
                                <td><label for="password" class="form-label">Password</label></td>
                                <td><input class="form-control" type="text" name="password" id="password" size="20" required value="<?= $dataOrmawa['password'] ?>"></td>
                            </tr>
                            
                            <tr>
                                <td><label for="email" class="form-label">Email</label></td>
                                <td><input class="form-control" type="text" name="email" id="email" size="20" required value="<?= $dataOrmawa['email'] ?>"></td>
                            
                            </tr>

                            <tr?>
                                <td><label for="no_hp" class="form-label">NO HP</label></td>
                                <td><input class="form-control" type="text" name="no_hp" id="no_hp" size="20" required value="<?= $dataOrmawa['no_hp'] ?>"></td>
                            
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="edit_ormawa" value="Simpan">
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
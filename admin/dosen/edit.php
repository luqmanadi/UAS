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
                    <form action="../aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="id_dosen" class="form-label">ID Dosen</label></td>
                                <td><input class="form-control" type="number" name="id_dosen" id="id_dosen" size="20" readonly value="<?= $dataDosen['id_dosen'] ?>"></td>
                            </tr>

                            <tr>
                                <td><label for="nama" class="form-label">Nama Lengkap</label></td>
                                <td><input class="form-control" type="text" name="nama" id="nama" size="20" required value="<?= $dataDosen['nama'] ?>"></td>
                            </tr>

                            <tr>
                                <td><label for="username" class="form-label">Username</label></td>
                                <td><input class="form-control" type="text" name="username" id="username" size="20" required value="<?= $dataDosen['username'] ?>"></td>
                            
                            </tr>

                            <tr>
                                <td><label for="password" class="form-label">Password</label></td>
                                <td><input class="form-control" type="text" name="password" id="password" size="20" required value="<?= $dataDosen['password'] ?>"></td>
                            </tr>
                            
                            <tr>
                                <td><label for="email" class="form-label">Email</label></td>
                                <td><input class="form-control" type="text" name="email" id="email" size="20" required value="<?= $dataDosen['email'] ?>"></td>
                            
                            </tr>

                            <tr?>
                                <td><label for="no_hp" class="form-label">NO HP</label></td>
                                <td><input class="form-control" type="text" name="no_hp" id="no_hp" size="20" required value="<?= $dataDosen['no_hp'] ?>"></td>
                            
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="edit_dosen" value="Simpan">
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
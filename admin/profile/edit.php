<?php

require_once '../layout/top.php';

$id_user = $_SESSION['id_user'];
$dataAdmin = getAdmin($connection, $id_user);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Edit Data Admin</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- // Form -->
                    <form action="../aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="id_admin" class="form-label">ID Admin</label></td>
                                <td><input class="form-control" type="number" name="id_admin" id="id_admin" size="20"
                                        readonly value="<?= $dataAdmin['id_user'] ?>"></td>
                            </tr>

                            <tr>
                                <td><label for="username" class="form-label">Username</label></td>
                                <td><input class="form-control" type="text" name="username" id="username" size="20"
                                        required value="<?= $dataAdmin['username'] ?>"></td>

                            </tr>

                            <tr>
                                <td><label for="password" class="form-label">Password</label></td>
                                <td><input class="form-control" type="text" name="password" id="password" size="20"
                                        required value="<?= $dataAdmin['password'] ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="edit_admin" value="Simpan">
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
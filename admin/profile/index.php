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
        <a href="../dashboard/index.php" class="btn btn-primary">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Detail Profile Admin</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>ID Admin</td>
                                <td>:</td>
                                <td>
                                    <?= $dataAdmin['id_user'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>
                                    <?= $dataAdmin['username'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>
                                    <?= $dataAdmin['password'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Level / Role</td>
                                </td>
                                <td>:</td>
                                <td>
                                    <?= $dataAdmin['level'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="edit.php?id_user<?=$id_user?>" class="btn btn-info">Edit Data</a>
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


<?php

if (isset($_SESSION['info'])):
    if ($_SESSION['info']['status'] == 'success') {
        ?>
        <script>
            iziToast.success({
                title: 'Sukses',
                message: `<?= $_SESSION['info']['message'] ?>`,
                position: 'topCenter',
                timeout: 5000
            });
        </script>
        <?php
    } else {
        ?>
        <script>
            iziToast.error({
                title: 'Gagal',
                message: `<?= $_SESSION['info']['message'] ?>`,
                timeout: 5000,
                position: 'topCenter'
            });
        </script>
        <?php
    }

    unset($_SESSION['info']);
    $_SESSION['info'] = null;
endif;
?>
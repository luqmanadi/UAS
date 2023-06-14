<?php

require_once 'layout/top.php';

$id_user = $_SESSION['id_user'];
<<<<<<< HEAD
$dataDosen = getDosen($connection, $id_user);
=======
$dataDosen = getAkun($connection, $id_user);
>>>>>>> dbf35eae6cd9f7a30e3ff25dde3bb533956e5718

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Detail Profile</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>ID Anda</td>
                                <td>:</td>
                                <td>
<<<<<<< HEAD
                                    <?= $dataDosen['id_user'] ?>
=======
                                <?= $dataDosen['id_user'] ?>
>>>>>>> dbf35eae6cd9f7a30e3ff25dde3bb533956e5718
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>
                                    <?= $dataDosen['nama'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>
                                    <?= $dataDosen['username'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>
<<<<<<< HEAD
                                    <?= $dataDosen['password'] ?>
=======
                                    <?= $dataDose['password'] ?>
>>>>>>> dbf35eae6cd9f7a30e3ff25dde3bb533956e5718
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                </td>
                                <td>:</td>
                                <td>
                                    <?= $dataDosen['email'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>NO HP</td>
                                </td>
                                <td>:</td>
                                <td>
<<<<<<< HEAD
                                    <?= $dataDosen['no_hp'] ?>
=======
                                    <?= $dataDose['no_hp'] ?>
>>>>>>> dbf35eae6cd9f7a30e3ff25dde3bb533956e5718
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="edit.php?id_user<?= $id_user ?>" class="btn btn-info">Edit Data</a>
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
<?php

require_once 'layout/top.php';
$dataRuangan = getAllRuang($connection);
$level = $_SESSION['level']

    ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ruangan</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Ruangan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Ruangan</th>
                            <th>Status</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Ruangan</th>
                            <th>Status</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($dataRuangan as $index => $data): ?>
                            <tr>
                                <th scope="row">
                                    <?= $index + 1 ?>
                                </th>
                                <td>
                                    <?= $data['id_ruangan'] ?>
                                </td>
                                <td>
                                    <p
                                        class="badge rounded-pill text-white <?php if ($data['status'] == 'KOSONG') {
                                            echo 'bg-success';
                                        } else {
                                            echo 'bg-danger';
                                        } ?>">
                                        <?= $data['status'] ?></p>
                                </td>
                                <td>
                                    <?php if ($data['kategori'] == 1) {
                                        echo "R--KELAS";
                                    } elseif ($data['kategori'] == 2) {
                                        echo "R--SIDANG";
                                    } elseif ($data['kategori'] == 3) {
                                        echo "R--THETATER";
                                    } ?>
                                </td>
                                <td>
<<<<<<< HEAD
                                    <a class="btn btn-sm btn-warning" href="detail_ruangan.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-info-circle"></i>Detail</a>
									<a class="btn btn-sm btn-info" href="pengajuan.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-edit fa-fw"></i>Ajukan Peminjaman</a>
=======
                                    <a class="btn btn-sm btn-warning"
                                        href="detail_ruangan.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-info-circle"></i></a>
                                    <a class="btn btn-sm btn-info" data-toggle="modal"
                                        data-target="#modal<?= $data['id_ruangan']; ?>" href="#"><i
                                            class="fas fa-edit fa-fw"></i>Ajukan Peminjaman
                                    </a>
                                    <div class="modal fade" id="modal <?= $data['id_ruangan']; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Setuju apa Ga nih?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">x</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../aksi.php" method="POST">
                                                        <table cellpadding="8" class="w-100">

                                                            <div>
                                                                <label for="id_ruangan" class="form-label">ID
                                                                    Ruangan</label>
                                                                <input class="form-control" type="text" name="id_ruangan"
                                                                    id="id_ruangan" size="20" readonly
                                                                    value="<?= $data['id_ruangan'] ?>"></label>
                                                            </div>


                                                        </table>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

>>>>>>> 969aff3720a53c5d0157b9278bdc90e61d2681fe
                                </td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
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

<!-- peminjaman Modal-->
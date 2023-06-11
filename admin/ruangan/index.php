<?php
session_start();
require_once '../../helper/middleware.php';
require_once '../../helper/connection.php';
require_once '../../helper/repository/ruangan_repository.php';

if (!isLogin() || !isAdmin()) {
    header("Location: ../../login.php");
}

$dataRuangan = getAllRuang($connection);

require_once '../layout/top.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Ruangan</h1>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>
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
                                    <?= $data['id_ruangan']?>
                                </td>
                                <td>
                                    <p class="btn btn-sm btn-success"><?= $data['status'] ?></p>
                                </td>
                                <td>
                                    <?= $data['kategori'] ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="detail.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-info-circle"></i></a>
                                    <a class="btn btn-sm btn-info" href="edit.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-edit fa-fw"></i></a>
                                    <a class="btn btn-sm btn-danger mb-md-0 mb-1"
                                        href="../aksi.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-trash fa-fw"></i></a>
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
require_once '../layout/bottom.php';
?>
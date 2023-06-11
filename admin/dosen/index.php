<?php
require_once '../layout/top.php';

$dataDosen = getAllDosen($connection);


?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Dosen</h1>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Dosen</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Dosen</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Dosen</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($dataDosen as $index => $data) : ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $data['id_dosen'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="detail.php?id_dosen=<?= $data['id_dosen'] ?>"><i class="fas fa-info-circle"></i></a>
                                <a class="btn btn-sm btn-info" href="edit.php?id_dosen=<?= $data['id_dosen'] ?>"><i class="fas fa-edit fa-fw"></i></a>
                                <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="../aksi.php?id_dosen=<?= $data['id_dosen'] ?>"><i class="fas fa-trash fa-fw"></i></a>
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
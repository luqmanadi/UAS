<?php
    require_once 'layout/top.php';
    $ruang = getAllRuang($connection);
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
            <h6 class="m-0 font-weight-bold text-primary">Informasi Ruangan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Ruangan</th>
                            <th>Status</th>
                            <th>Kapasitas</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>No</th>
                            <th>ID Ruangan</th>
                            <th>Status</th>
                            <th>Kapasitas</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($ruang as $index => $data): ?>
                            <tr>
                                <th scope="row">
                                    <?= $index + 1 ?>
                                </th>
                                <td>
                                    <?= $data['id_ruangan'] ?>
                                </td>
                                <td>
                                    <?= $data['status'] ?>
                                </td>
                                <td>
                                    <?= $data['kapasitas'] ?>
                                </td>
                                <td>
                                    <?php 
                                        if($data['kategori'] == 1) {
                                            echo 'Ruang ISDB';
                                        } elseif ($data['kategori'] == 2) {
                                            echo 'Ruang Sidang';
                                        } elseif ($data['kategori'] == 3) {
                                            echo 'Ruang Teater';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info"
                                        href="detail.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-info-circle"></i></a>
                                    <a class="btn btn-sm btn-warning mb-md-0 mb-1"
                                        href="pinjam.php?id_ruangan=<?= $data['id_ruangan'] ?>"><i
                                            class="fas fa-paper-plane fa-fw"></i></a>
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
    require_once '../dosen/layout/bottom.php';
?>
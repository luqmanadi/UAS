<?php
    require_once '../dosen/layout/top.php';
    $dataPeminjaman = getAllPeminjaman($connection);
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mengajukan Peminjaman</h1>
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
                            <th>ID Peminjaman</th>
                            <th>ID User</th>
                            <th>ID Ruangan</th>
                            <th>Waktu</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>No</th>
                            <th>ID Peminjaman</th>
                            <th>ID User</th>
                            <th>ID Ruangan</th>
                            <th>Waktu</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($dataPeminjaman as $index => $data): ?>
                            <tr>
                                <th scope="row">
                                    <?= $index + 1 ?>
                                </th>
                                <td>
                                    <?= $data['id_peminjaman'] ?>
                                </td>
                                <td>
                                    <?= $data['id_user'] ?>
                                </td>
                                <td>
                                    <?= $data['id_ruangan'] ?>
                                </td>
                                <td>
                                    <?= $data['waktu'] ?>
                                </td>
                                <td>
                                    <?= $data['keperluan'] ?>
                                </td>
                                <td>
                                    <?= $data['tanggal'] ?>
                                </td>
                                <td>
                                    <?php if ($data['isapprove'] == "0") {
                                            ?>
                                            <a href="../aksi.php?isapprove=<?= $data['id_peminjaman'] ?>"
                                                class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#persetujuanModal">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-handshake"></i>
                                                </span>
                                                <span class="text">MENUNGGU</span>
                                            </a>
                                            <?php
                                        } else if ($data['isapprove'] == "1") {
                                            ?>
                                                <a href="#" class="btn btn-secondary btn-icon-split" readonly >
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-thumbs-up"></i>
                                                    </span>
                                                    <span class="text">KEMBALIKAN</span>
                                                </a>
                                            <?php
                                        } else if ($data['isapprove'] == "2") {
                                            ?>
                                                    <a href="#" class="btn btn-danger btn-icon-split" readonly>
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-thumbs-down"></i>
                                                        </span>
                                                        <span class="text">DITOLAK</span>
                                                    </a>
                                            <?php
                                        } else if ($data['isapprove'] == "3") {
                                            ?>
                                                    <a href="#" class="btn btn-success btn-icon-split" readonly>
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-thumbs-down"></i>
                                                        </span>
                                                        <span class="text">SELESAI</span>
                                                    </a>
                                            <?php
                                        }
                                        ?>
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
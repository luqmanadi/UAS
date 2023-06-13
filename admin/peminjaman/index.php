<?php

require_once '../layout/top.php';
$dataPeminjaman = getAllPeminjaman($connection);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peminjaman</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Peminjaman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID User</th>
                            <th>ID Ruangan</th>
                            <th>Waktu</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID User</th>
                            <th>ID Ruangan</th>
                            <th>Waktu</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($dataPeminjaman as $index => $data): ?>
                            <tr>
                                <th scope="row">
                                    <?= $index + 1 ?>
                                </th>
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
                                    <?= $data['tanggal'] ?>
                                </td>

                                <td>
                                    <?php if ($data['isapprove'] == "0") {
                                        ?>
                                        <a href="../aksi.php?isapprove=<?= $data['id_peminjaman'] ?>"
                                            class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#persetujuanModal">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-handshake"></i>
                                            </span>
                                            <span class="text">MENUNGGU</span>
                                        </a>
                                        <?php
                                    } else if ($data['isapprove'] == "1") {
                                        ?>
                                            <a href="#" class="btn btn-success btn-icon-split" readonly >
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-thumbs-up"></i>
                                                </span>
                                                <span class="text">DITERIMA</span>
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
                                    }
                                    ?>
                                </td>

                                <td>
                                    <a class="btn btn-sm btn-info"
                                        href="detail.php?id_peminjaman=<?= $data['id_peminjaman'] ?>"><i
                                            class="fas fa-info-circle"></i></a>
                                    <a class="btn btn-sm btn-danger mb-md-0 mb-1"
                                        href="../aksi.php?delete_peminjaman=<?= $data['id_peminjaman'] ?>"><i
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


<!-- persetujuan Modal-->
<div class="modal fade" id="persetujuanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setuju apa Ga nih?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">Pilih "DITERIMA" atau "DITOLAK"</div>
            <div class="modal-footer">
                <a class="btn btn-success" href="../aksi.php?isAgree=<?= $data['id_peminjaman'] ?>">Terima</a>
                <a class="btn btn-danger" href="../aksi.php?isDisagree=<?= $data['id_peminjaman'] ?>">Tolak</a>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'layout/top.php';
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
                        <?php
                        $no = 1;
                        foreach ($dataPeminjaman as $index => $data): 
                        
                            if($_SESSION['id_user'] == $data['id_user']) :
                                
                            ?>
                            
                            <tr>
                                <th scope="row">
                                    <?= $no ?>
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
                                            <a href="#"
                                                class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#persetujuanModal" readonly>
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-handshake"></i>
                                                </span>
                                                <span class="text">MENUNGGU</span>
                                            </a>
                                            <?php
                                        } else if ($data['isapprove'] == "1") {
                                            ?>
                                                <a href="aksi.php?pengembalian=<?= $data['id_peminjaman'] ?>" class="btn btn-secondary btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-running"></i>
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
                                                            <i class="fas fa-thumbs-up"></i>
                                                        </span>
                                                        <span class="text">SELESAI</span>
                                                    </a>
                                            <?php
                                        }
                                        ?>
                                </td>
                            </tr>
                            <?php $no++ ?>
                            <?php endif ?>
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
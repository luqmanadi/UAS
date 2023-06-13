<?php

require_once '../layout/top.php';
$id_ruangan = $_GET['id_ruangan'];
$dataRuangan = getRuangan($connection, $id_ruangan);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ruangan</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Edit Data Ruangan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- // Form -->
                    <form action="../aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="id_ruangan" class="form-label">ID Ruangan</label></td>
                                <td><input class="form-control" type="text" name="id_ruangan" id="id_ruangan" size="20"
                                        readonly value="<?= $dataRuangan['id_ruangan'] ?>">
                                </td>
                            </tr>

                            <tr>
                                <td><label for="status" class="form-label">Status</label></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="terisi" value="TERISI" required value="TERISI"<?php if ($dataRuangan['status'] == 'TERISI')
                                                echo 'checked'; ?>> 
                                        <label class="form-check-label" for="terisi">
                                            TERISI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="kosong" value="KOSONG" required value="KOSONG" <?php if ($dataRuangan['status'] == 'KOSONG')
                                                echo 'checked'; ?>>
                                        <label class="form-check-label" for="kosong">
                                            KOSONG
                                        </label>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td><label for="kapasitas" class="form-label">Kapasitas</label></td>
                                <td><input class="form-control" type="text" name="kapasitas" id="kapasitas" size="20"
                                        required value="<?= $dataRuangan['kapasitas'] ?>"></td>
                            </tr>

                            <tr>
                                <td><label for="kategori" class="form-label">Kategori</label></td>
                                <td>
                                    <select class="form-control" name="kategori" id="kategori" required>
                                        <option value="<?= $dataRuangan['kategori'] ?>">
                                        <?php if($dataRuangan['kategori'] == 1 ){
                                            echo "Ruang Kelas";
                                        }elseif($dataRuangan['kategori'] == 2){
                                            echo "Ruang Sidang";
                                        }elseif($dataRuangan['kategori'] == 3){
                                            echo "Ruang Theater";
                                        }
                                        ?></option>
                                        <option value="1">Ruang Kelas</option>
                                        <option value="2">Ruang Sidang</option>
                                        <option value="3">Ruang Theater</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="edit_ruangan" value="Simpan">
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
<?php

require_once 'layout/top.php';
$id_ruangan = $_GET['id_ruangan'];
$dataRuangan = getRuangan($connection, $id_ruangan);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ruangan</h1>
        <a href="ruangan.php" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title text-primary font-weight-bold">Pengajuan Peminjaman Ruangan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- // Form -->
                    <form action="aksi.php" method="POST">
                        <table cellpadding="8" class="w-100">

                            <tr>
                                <td><label for="id_ruangan" class="form-label">ID Ruangan</label></td>
                                <td><input class="form-control" type="text" name="id_ruangan" id="id_ruangan" size="20"
                                        readonly value="<?= $dataRuangan['id_ruangan'] ?>">
                                </td>
                            </tr>
							<tr>
                                <td><label for="id_user" class="form-label">ID User</label></td>
                                <td><input class="form-control" type="text" name="id_user" id="id_user" size="20" required </td>
                            </tr>
                            <tr>
                                <td><label for="waktu" class="form-label">Waktu</label></td>
                                <td>
									<select class="form-control" name="waktu" id="waktu" required>
                                        <option value="07.00 - 08.40">07.00 - 08.40</option>
                                        <option value="08.40 - 10.20">08.40 - 10.20</option>
                                        <option value="10.20 - 12.00">10.20 - 12.00</option>
                                        <option value="12.50 - 14.30">12.50 - 14.30</option>
										<option value="14.30 - 16.10">14.30 - 16.10</option>
										<option value="16.10 - 17.50">16.10 - 17.50</option>
                                    </select>
                                </td>

                            </tr>
							<tr>
								<td><label for="tanggal" class="form-label">Tanggal</label></td>
                                <td><input class="form-control" type="date" name="tanggal" id="tanggal" size="20" required </td>
							</tr>
							<tr>
                                <td><label for="keperluan" class="form-label">Keperluan</label></td>
                                <td><input class="form-control" type="text" name="keperluan" id="keperluan" size="20" required </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-success" type="submit" name="pengajuan" value="Ajukan">
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
require_once 'layout/bottom.php';
?>
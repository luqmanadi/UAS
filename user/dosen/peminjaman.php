<?php
require_once 'layout/top.php';
require_once '../helper/connection.php';
?>

<div class="container">
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ajukan Peminjaman</h1>
    <a href="dashboard.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" size="50" required></td>
              </tr>

              <tr>
                <td>NIP</td>
                <td><input class="form-control" type="number" name="nim" size="50" required></td>
              </tr>
              <tr>
                <td>No HP</td>
                <td><input class="form-control" type="number" name="no_hp" id="no_hp" size="50" required></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" size="50" required></textarea></td>
              </tr>
              <tr>
                <td>Ruangan</td>
                <td>
                  <select class="form-control" name="departemen" id="departemen" required>
                    <option value="">--Pilih Ruangan--</option>
                    <option value="ruangTeater">Ruang Teater</option>
                    <option value="ruangSidang">Ruang Sidang</option>
                    <option value="ISDB1.1">ISDB 1.1</option>
                    <option value="ISDB1.2">ISDB 1.2</option>
                    <option value="ISDB1.3">ISDB 1.3</option>
                    <option value="ISDB1.4">ISDB 1.4</option>
                    <option value="ISDB1.6">ISDB 1.6</option>
                    <option value="ISDB1.7">ISDB 1.7</option>
                    <option value="ISDB1.8">ISDB 1.8</option>
                    <option value="ISDB2.1">ISDB 2.1</option>
                    <option value="ISDB2.2">ISDB 2.2</option>
                    <option value="ISDB2.3">ISDB 2.3</option>
                    <option value="ISDB2.4">ISDB 2.4</option>
                    <option value="ISDB2.6">ISDB 2.6</option>
                    <option value="ISDB2.7">ISDB 2.7</option>
                    <option value="ISDB2.8">ISDB 2.8</option>
                    <option value="ISDB3.1">ISDB 3.1</option>
                    <option value="ISDB3.2">ISDB 3.2</option>
                    <option value="ISDB3.3">ISDB 3.3</option>
                    <option value="ISDB3.4">ISDB 3.4</option>
                    <option value="ISDB3.6">ISDB 3.6</option>
                    <option value="ISDB3.7">ISDB 3.7</option>
                    <option value="ISDB3.8">ISDB 3.8</option>
                    <option value="ISDB3.1">ISDB 4.1</option>
                    <option value="ISDB3.2">ISDB 4.2</option>
                    <option value="ISDB3.3">ISDB 4.3</option>
                    <option value="ISDB3.4">ISDB 4.4</option>
                    <option value="ISDB3.6">ISDB 4.6</option>
                    <option value="ISDB3.7">ISDB 4.7</option>
                    <option value="ISDB3.8">ISDB 4.8</option>
                  </select>
                </td>
              </tr>
              <tr>```
                <td>Alasan</td>
                <td><input class="form-control" type="text" name="alasan" id="alasan" size="50" required></td>
              </tr>
              
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>
</div>

<?php
require_once 'layout/bottom.php';
?>
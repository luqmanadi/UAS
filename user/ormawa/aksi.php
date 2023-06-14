<?php
session_start();

require_once '../../helper/connection.php';
require_once '../../helper/repository/ruangan_repository.php';
require_once '../../helper/repository/peminjaman_repository.php';
require_once '../../helper/repository/ormawa_repository.php';
require_once '../../helper/middleware.php';

if (!isLogin() || !isOrmawa()) {
    header("Location: ../../login.php");
}

if (isset($_POST['pengajuan'])) {
    $id_ruangan = $_POST['id_ruangan'];
    $id_user = $_POST['id_user'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];
    $keperluan = $_POST['keperluan'];

    $msg = pengajuanPeminjaman($connection, $id_user, $id_ruangan, $waktu, $tanggal, $keperluan);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil mengajukan peminjaman'
        ];
        header('Location: peminjaman.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: peminjaman.php');
    }
} elseif (isset($_GET['pengembalian'])) {
    $id_peminjaman = $_GET['pengembalian'];

    $msg = pengembalianPeminjaman($connection, $id_peminjaman);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Terima kasih sudah meminjam'
        ];
        header('Location: peminjaman.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: peminjaman.php');
    }
} 
?>
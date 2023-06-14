<?php
session_start();

require_once '../helper/connection.php';
require_once '../helper/repository/dosen_repository.php';
require_once '../helper/repository/mahasiswa_repository.php';
require_once '../helper/repository/ruangan_repository.php';
require_once '../helper/repository/peminjaman_repository.php';
require_once '../helper/repository/ormawa_repository.php';
require_once '../helper/repository/admin_repository.php';

require_once '../helper/middleware.php';


if (!isLogin() || !isAdmin()) {
    header("Location: ../../login.php");
}

if(isset($_POST['tambah_dosen'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    
    $msg = addDosen($connection, $username, $password, $level, $nama, $email, $no_hp);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: dosen/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: dosen/index.php');
    }
}  

if (isset($_GET['delete_dosen'])) {
    $id_dosen = $_GET['delete_dosen'];

    $msg = deleteDosen($connection, $id_dosen);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menghapus data'
        ];
        header('Location: dosen/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: dosen/index.php');
    }
}

if(isset($_POST['edit_dosen'])){
    $id_dosen = $_POST['id_dosen'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $msg = updateDosen($connection, $username, $password, $nama, $email, $no_hp, $id_dosen);
    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil mengedit data'
        ];
        header('Location: dosen/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: dosen/index.php');
    }
}

if (isset($_POST['tambah_ormawa'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $msg = addOrmawa($connection, $username, $password, $level, $nama, $email, $no_hp);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: ormawa/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ormawa/index.php');
    }
}

if (isset($_GET['delete_ormawa'])) {
    $id_ormawa = $_GET['delete_ormawa'];

    $msg = deleteOrmawa($connection, $id_ormawa);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menghapus data'
        ];
        header('Location: ormawa/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ormawa/index.php');
    }
}

if (isset($_POST['edit_ormawa'])) {
    $id_ormawa = $_POST['id_ormawa'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $msg = updateOrmawa($connection, $username, $password, $nama, $email, $no_hp, $id_ormawa);
    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil mengedit data'
        ];
        header('Location: ormawa/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ormawa/index.php');
    }
}

if (isset($_POST['tambah_mhs'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $msg = addMahasiswa($connection, $username, $password, $level, $nama, $email, $no_hp);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: mahasiswa/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: mahasiswa/index.php');
    }
}

if (isset($_GET['delete_mhs'])) {
    $id_mhs = $_GET['delete_mhs'];

    $msg = deleteMahasiswa($connection, $id_mhs);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menghapus data'
        ];
        header('Location: mahasiswa/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: mahasiswa/index.php');
    }
}


if (isset($_POST['edit_mhs'])) {
    $id_mhs = $_POST['id_mhs'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $msg = updateMahasiswa($connection, $username, $password, $nama, $email, $no_hp, $id_mhs);
    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil mengedit data'
        ];
        header('Location: mahasiswa/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: mahasiswa/index.php');
    }
}

if (isset($_POST['tambah_ruangan'])) {
    $id_ruangan = $_POST['id_ruangan'];
    $status = $_POST['status'];
    $kapasitas = $_POST['kapasitas'];
    $kategori = $_POST['kategori'];

    $msg = addRuangan($connection, $id_ruangan, $status, $kapasitas, $kategori);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: ruangan/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ruangan/index.php');
    }
}

if (isset($_GET['delete_ruangan'])) {
    $id_ruangan = $_GET['delete_ruangan'];

    $msg = deleteRuangan($connection, $id_ruangan);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menghapus data'
        ];
        header('Location: ruangan/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ruangan/index.php');
    }
}


if (isset($_POST['edit_ruangan'])) {
    $id_ruangan = $_POST['id_ruangan'];
    $status = $_POST['status'];
    $kapasitas = $_POST['kapasitas'];
    $kategori = $_POST['kategori'];

    $msg = updateRuangan($connection, $id_ruangan, $status, $kapasitas, $kategori);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: ruangan/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: ruangan/index.php');
    }
}

if (isset($_POST['edit_admin'])) {
    $id_admin = $_POST['id_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $msg = updateAdmin($connection, $username, $password, $id_admin);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Berhasil menambah data'
        ];
        header('Location: profile/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: profile/index.php');
    }
}


if (isset($_GET['isAgree']) && isset($_GET['id_peminjaman']) && isset($_GET['id_ruangan'])) {
    $id_peminjaman= $_GET['id_peminjaman'];
    $id_ruangan = $_GET['id_ruangan'];

    $msg = peminjamanDiterima($connection, $id_peminjaman, $id_ruangan);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Permintaan peminjaman diijinkan'
        ];
        header('Location: peminjaman/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: peminjaman/index.php');
    }
}

if (isset($_GET['isDisagree'])) {
    $id_peminjaman = $_GET['isDisagree'];

    $msg = peminjamanDitolak($connection, $id_peminjaman);

    if ($msg) {
        $_SESSION['info'] = [
            'status' => 'success',
            'message' => 'Permintaan Ditolak'
        ];
        header('Location: peminjaman/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: peminjaman/index.php');
    }
}

?>
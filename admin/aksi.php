<?php
session_start();

require_once '../helper/connection.php';
require_once '../helper/repository/dosen_repository.php';
require_once '../helper/repository/mahasiswa_repository.php';
require_once '../helper/repository/ruangan_repository.php';
require_once '../helper/repository/peminjaman_repository.php';
require_once '../helper/repository/ormawa_repository.php';
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
        header('Location: dosen/index.php');
    } else {
        $_SESSION['info'] = [
            'status' => 'failed',
            'message' => mysqli_error($connection)
        ];
        header('Location: dosen/index.php');
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

    $msg = deleteOrmawa($connection, $id_ormawa);

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


?>
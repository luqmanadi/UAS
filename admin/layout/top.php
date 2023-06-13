<?php
session_start();

require_once '../../helper/connection.php';
require_once '../../helper/repository/dosen_repository.php';
require_once '../../helper/repository/mahasiswa_repository.php';
require_once '../../helper/repository/ruangan_repository.php';
require_once '../../helper/repository/peminjaman_repository.php';
require_once '../../helper/repository/ormawa_repository.php';
require_once '../../helper/repository/admin_repository.php';
require_once '../../helper/middleware.php';


if (!isLogin() || !isAdmin()) {
    $msg = 'Anda Tidak Berhak Akses Ke Halaman ini';
    header("Location: ../../login.php?msg=$msg");
}


?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BO Room - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/modules/izitoast/css/iziToast.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        require_once 'sidenav.php';
        require_once 'header.php';
        ?>
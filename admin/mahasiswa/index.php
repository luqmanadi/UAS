<?php
session_start();
require_once '../../helper/middleware.php';
require_once '../../helper/connection.php';

if (!isLogin() || !isAdmin()) {
    header("Location: ../../login.php");
}

require_once '../layout/top.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Mahasiswa</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


    </div>

    <!-- Content Row -->

    <div class="row">


    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require_once '../layout/bottom.php';
?>
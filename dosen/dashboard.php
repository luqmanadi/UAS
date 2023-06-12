<?php
    require_once 'layout/top.php';
    require_once '../helper/connection.php';

    $ruang = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_ruangan");

    $total_ruang = mysqli_fetch_array($ruang)[0];
?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang Dosen</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card Jumlah Ruangan -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Ruangan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?=$total_ruang ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->

                    <div class="row">

                        
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <br><br><br><br><br><br><br><br><br><br><br>
            <!-- End of Main Content -->

<?php 
    require_once 'layout/bottom.php';
?>

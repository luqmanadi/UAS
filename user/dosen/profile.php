<?php
    require_once 'layout/top.php';
    require_once '../helper/connection.php';

    $ruang = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_ruangan");

    $total_ruang = mysqli_fetch_array($ruang)[0];
?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                    

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

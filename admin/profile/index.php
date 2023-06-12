<?php

require_once '../layout/top.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Profile</h1>
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


<?php

if (isset($_SESSION['info'])):
    if ($_SESSION['info']['status'] == 'success') {
        ?>
        <script>
            iziToast.success({
                title: 'Sukses',
                message: `<?= $_SESSION['info']['message'] ?>`,
                position: 'topCenter',
                timeout: 5000
            });
        </script>
        <?php
    } else {
        ?>
        <script>
            iziToast.error({
                title: 'Gagal',
                message: `<?= $_SESSION['info']['message'] ?>`,
                timeout: 5000,
                position: 'topCenter'
            });
        </script>
        <?php
    }

    unset($_SESSION['info']);
    $_SESSION['info'] = null;
endif;
?>
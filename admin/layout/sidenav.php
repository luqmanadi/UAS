<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <i><img src="../../assets/img/logo.png" alt="" width="50px"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BO Room</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="<?= str_contains($_SERVER['PHP_SELF'], '/dashboard') ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link" href="../dashboard/index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>
    
    <!-- Nav Item - User Collapse Menu -->
    <li class="<?php
    if (str_contains($_SERVER['PHP_SELF'], '/dosen')) {
        echo 'nav-item active';
    } elseif (str_contains($_SERVER['PHP_SELF'], '/ormawa')) {
        echo 'nav-item active';
    } elseif (str_contains($_SERVER['PHP_SELF'], '/mahasiswa')) {
        echo 'nav-item active';
    } else {
        echo 'nav-item';
    } ?>" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-users fa-cog"></i>
            <span>User</span>
        </a>
        <div id="collapseUser" class=" <?php 
        if(str_contains($_SERVER['PHP_SELF'], '/dosen')){
            echo 'collapse show';
        }elseif (str_contains($_SERVER['PHP_SELF'], '/ormawa')) {
            echo 'collapse show';
        }elseif (str_contains($_SERVER['PHP_SELF'], '/mahasiswa')) {
            echo 'collapse show';
        }else{echo 'collapse';} ?>" aria-labelledby="headingUser" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar User :</h6>
                <a class="<?= str_contains($_SERVER['PHP_SELF'],'/dosen')?'collapse-item active':'collapse-item'?>" href="../dosen/index.php">Dosen</a>
                <a class="<?= str_contains($_SERVER['PHP_SELF'], '/ormawa') ? 'collapse-item active' : 'collapse-item'?>" href="../ormawa/index.php">Ormawa</a>
                <a class="<?= str_contains($_SERVER['PHP_SELF'], '/mahasiswa') ? 'collapse-item active' : 'collapse-item' ?>" href="../mahasiswa/index.php">Mahasiswa</a>
            </div>
        </div>
    </li>
            

    <!-- Nav Item - Ruangan Collapse Menu -->
    <li class="<?= str_contains($_SERVER['PHP_SELF'], '/ruangan') ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" aria-expanded="true" aria-controls="collapseRuangan" data-target="#collapseRuangan"  >
            <i class="fas fa-fw fa-door-open"></i>
            <span>Ruangan</span>
        </a>
        <div  id="collapseRuangan" class="<?= str_contains($_SERVER['PHP_SELF'], '/ruangan') ? 'collapse show' : 'collapse' ?>" data-parent="#accordionSidebar" aria-labelledby="headingRuangan" >
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="<?= str_contains($_SERVER['PHP_SELF'], '/ruangan/index.php') ? 'collapse-item active' : 'collapse-item' ?>" href="../ruangan/index.php">List</a>
                <a class="<?= str_contains($_SERVER['PHP_SELF'], '/ruangan/create.php') ? 'collapse-item active' : 'collapse-item' ?>" href="../ruangan/create.php">Tambah Ruang</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Ruangan Collapse Menu -->
    <li class="<?= str_contains($_SERVER['PHP_SELF'], '/peminjaman') ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjaman" aria-expanded="true" aria-controls="collapsePeminjaman">
            <i class="fas fa-fw fa-file"></i>
            <span>Riwayat Peminjaman</span>
        </a>
        <div id="collapsePeminjaman" class="<?= str_contains($_SERVER['PHP_SELF'], '/peminjaman') ? 'collapse show' : 'collapse' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="<?= str_contains($_SERVER['PHP_SELF'], '/peminjaman/index.php') ? 'collapse-item active' : 'collapse-item' ?>" href="../peminjaman/index.php">List</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    
</ul>
<!-- End of Sidebar -->
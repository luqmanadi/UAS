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
    <li class="<?= str_contains($_SERVER['PHP_SELF'], '/dosen') ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>
    
    <!-- Nav Item - Ruangan Collapse Menu -->
    <li class="<?= str_contains($_SERVER['PHP_SELF'], 'riwayat.php') ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjaman" aria-expanded="true" aria-controls="collapsePeminjaman">
            <i class="fas fa-fw fa-file"></i>
            <span>Ruangan</span>
        </a>
        <div id="collapsePeminjaman" class="<?= str_contains($_SERVER['PHP_SELF'], 'riwayat.php') ? 'collapse show' : 'collapse' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="<?= str_contains($_SERVER['PHP_SELF'], 'riwayat.php') ? 'collapse-item active' : 'collapse-item' ?>" href=".peminjaman.php">List</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Ruangan Collapse Menu -->
    <li class="<?= str_contains($_SERVER['PHP_SELF'], 'riwayat.php') ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjaman" aria-expanded="true" aria-controls="collapsePeminjaman">
            <i class="fas fa-fw fa-file"></i>
            <span>Riwayat Peminjaman</span>
        </a>
        <div id="collapsePeminjaman" class="<?= str_contains($_SERVER['PHP_SELF'], 'riwayat.php') ? 'collapse show' : 'collapse' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="<?= str_contains($_SERVER['PHP_SELF'], 'riwayat.php') ? 'collapse-item active' : 'collapse-item' ?>" href=".peminjaman.php">List</a>
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
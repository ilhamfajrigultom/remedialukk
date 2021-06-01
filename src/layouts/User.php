<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-atlas"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pengaduan</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item <?php if ($title === "Dashboard") echo "active"; ?>">
            <a class="nav-link" href="../user/dashboard.php">
                <i class="fas fa-users"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Fiture
        </div>
        <li class="nav-item <?php if ($title === "Buat Laporan") echo "active"; ?>">
            <a class="nav-link" href="../user/buatLaporan.php">
                <i class="fas fa-edit"></i>
                <span>Tambah Pengaduan</span></a>
        </li>

        <li class="nav-item <?php if ($title === "Laporan") echo "active"; ?>">
            <a class="nav-link" href="../user/lihatLaporan.php">
                <i class="fas fa-book-open"></i>
                <span>Pengaduan Terverify</span></a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        
    </ul>


    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none ">
                    <i class="fa fa-bars"></i>
                </button>

                <h3 class="text-gray-800 ml-3"><?= $title; ?></h3>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow">

                        <a href="../../" class="btn btn-outline-danger">Logout</a>
                    </li>
                </ul>
            </nav>
            <div class="container">
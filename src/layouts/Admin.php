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
      <a class="nav-link" href="../admin/dashboard.php">
        <i class="fas fa-user-astronaut"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Fiture
    </div>

    <li class="nav-item <?php if ($title === "Pengaduan Masyarakat") echo "active"; ?>">
      <a class="nav-link" href="../admin/laporan.php">
        <i class="fas fa-book-open"></i>
        <span>Pengaduan Masyarakat</span></a>
    </li>

    <li class="nav-item <?php if ($title === "Pengaduan Terverifikasi") echo "active"; ?>">
      <a class="nav-link" href="../admin/terverify.php">
        <i class="fas fa-check-circle"></i>
        <span>Pengaduan Terverify</span></a>
    </li>

    <li class="nav-item <?php if ($title === "Tanggapan") echo "active"; ?>">
      <a class="nav-link" href="../admin/tanggapan.php">
        <i class="fas fa-bookmark"></i>
        <span>Tanggapan</span></a>
    </li>

    <li class="nav-item <?php if ($title === "Generate Laporan") echo "active"; ?>">
      <a class="nav-link" href="../admin/generate.php">
        <i class="fas fa-folder-open"></i>
        <span>Laporan</span></a>
    </li>

    <li class="nav-item <?php if ($title === "Data Petugas") echo "active"; ?>">
      <a class="nav-link" href="../admin/petugas.php">
        <i class="fas fa-user-tie"></i>
        <span>Data Petugas</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
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
            <a href="../petugas/login.php" class="btn btn-outline-danger">Logout</a>
          </li>

        </ul>

      </nav>

      <div class="container">
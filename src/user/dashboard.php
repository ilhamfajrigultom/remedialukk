<?php

$title = 'Masyarakat';

require '../layouts/header.php';
require '../layouts/User.php';
?>

<div class="row py-5">
  <div class="col-6 py-5 mt-3">
    <div class="desc ml-5">
      <h2 class="text-gray-800" data-aos="fade-down">Selamat datang Ayo Buat Laporan Kamu</h2>
      <p data-aos="fade-down">Website ini dibuat untuk melihat laporan atau keluh kesah masyarakat dan menjawab
        nya dengan satu platform Saja.</p>
      <a href="buatLaporan.php" class="btn btn-primary shadow" data-aos="fade-up">Tambah Pengaduan</a>
      <a href="lihatLaporan.php" class="btn btn-outline-primary ml-2" data-aos="fade-up" data-aos-duration="500">Lihat Pengaduan</a>
    </div>
  </div>
  <div class="col-6">
    <div class="image" data-aos="fade-left">
      <img src="../../assets/img/d-user.png" width="500" alt="">
    </div>
  </div>
</div>

<?php require '../layouts/footer.php'; ?>
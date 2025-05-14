<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('includes.landing.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SiTeguh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <?php echo $__env->make('includes.landing.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    <?php echo $__env->make('includes.landing.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Sistem Tanggap Gangguan Listrik Umum Harian</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Respons Cepat. Solusi Tepat. Untuk Energi yang Lebih Andal.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="<?php echo e(url('login')); ?>" class="btn-get-started scrollto">Laporkan!</a>
           
            <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/pengaduan.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              <h3>SiTeguh</h3> atau Sistem Tanggap Gangguan Listrik Umum Harian adalah sistem laporan pengaduan platform digital terpadu untuk melaporkan dan memantau gangguan listrik harian. Dibangun untuk mempercepat respons dan meningkatkan keandalan layanan listrik di seluruh penjuru negeri.
            </p>
            <ul>
              <h3>Mengapa SiTeguh</h3>
              <li><i class="ri-check-double-line"></i>Transparan dan Akurat</li>
              <li><i class="ri-check-double-line"></i>Hemat Waktu</li>
              <li><i class="ri-check-double-line"></i>Mendorong Partisipasi Masyarakat</li>
              <li><i class="ri-check-double-line"></i>Solusi Digital Ramah Pemerintah dan Startup</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              <h4>SiTeguh</h4>menjembatani kebutuhan masyarakat dan kesiapan penyedia energi untuk mewujudkan layanan listrik yang lebih handal dan responsif. <b>Karena setiap kilowatt itu penting.
            </p>
            <a href="#services" class="btn-learn-more">Tata cara atau alur pengaduan</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>TATA CARA</h2>
          <p>Nah ini dia alur pelaporan yang ada website APLIKASIKU</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-edit-alt'></i></div>
              <h4 class="title"><a href="">Kirim Laporan</a></h4>
              <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Proses Verifikasi</a></h4>
              <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tindak Lanjut</a></h4>
              <p class="description">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title"><a href="">Selesai</a></h4>
              <p class="description">Laporan pengaduan telah selesai ditindak.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <?php echo $__env->make('includes.landing.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php echo $__env->make('includes.landing.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\Users\62822\Documents\LARAFEL PROJEK\pengaduan-masyarakat\resources\views/welcome.blade.php ENDPATH**/ ?>
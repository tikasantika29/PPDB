<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB Online Kab. Kuningan 2023</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/logod.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/FlexStart/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('style/FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/FlexStart/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/FlexStart/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/FlexStart/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/FlexStart/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ ('beranda') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('style/logod.png') }}" alt="">
        <span>PPDB 2023</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#values">PPDB Online</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="{{ ('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">PPDB Kab.Kuningan 2023</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Ayo Daftar ke Sekolah Impianmu Bersama Kami!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{ ('dashboard_siswa') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Pendaftaran PPDB Online</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('style/FlexStart/assets/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tentang Kami</h3>
              <h2>Dinas Pendidikan Kabupaten Kuningan menyediakan layanan untuk menunjang penerimaan peserta didik baru.</h2>
              <p>
                Layanan penerimaan peserta didik baru dapat memudahkan calon siswa untuk mendaftar ke SMP impian mereka. 
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('style/FlexStart/assets/img/values-3.png') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>PPDB Online</h2>
          <p>Manfaat Mendaftar di Web PPDB Online</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('style/FlexStart/assets/img/values-1.png') }}" class="img-fluid" alt="">
              <h3>Mendapatkan Informasi Terbaru</h3>
              <p>Dengan web PPDB Online ini, anda dapat mengetahui informasi terbaru seputar PPDB yang akan / sedang dilaksanakan</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('style/FlexStart/assets/img/values-3.png') }}" class="img-fluid" alt="">
              <h3>Memudahkan Pendaftaran</h3>
              <p>Dengan melakukan pendaftaran secara online, memudahkan pendaftaran dimanapun dan kapanpun tanpa harus datang ke sekolah impian</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('style/FlexStart/assets/img/values-2.png') }}" class="img-fluid" alt="">
              <h3>Informasi Penerimaan</h3>
              <p>Dengan web PPDB Online ini, anda dapat mengakses informasi penerimaan secara mandiri dan cepat</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </header>

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Raya Cigugur No.06, Cigugur, Kec. Kuningan, Kabupaten Kuningan,<br>Jawa Barat, 45552</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>(0232) 875905</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>disdikbud.kuningan@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Buka</h3>
                  <p>Senin - Jumat<br>08:00 - 16:00</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="mt-2">
        <center>
        <img src="{{ asset('style/logod.png') }}" alt="" height="40px" width="40px">
        <img src="{{ asset('style/logo uniku.jpg') }}" alt="" height="40px" width="40px">
        <img src="{{ asset('style/fkom.png') }}" alt="" height="40px" width="60px">
      </center>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Euis Santika</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/FlexStart/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('style/FlexStart/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('style/FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/FlexStart/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('style/FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('style/FlexStart/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('style/FlexStart/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/FlexStart/assets/js/main.js') }}"></script>

</body>

</html>
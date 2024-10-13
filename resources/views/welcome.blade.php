<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SDIT AJJIHAN</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/log0.png" rel="icon" sizes="32x32">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/sheaderelecao-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .header {
    background-color: #146c94; /* Ubah warna latar belakang sesuai kebutuhan */
    color: white; /* Ubah warna teks jika perlu */
    position: fixed; /* Membuat header tetap berada di atas */
    width: 100%; /* Membuat header mengisi lebar halaman */
    z-index: 1000; /* Memastikan header di atas elemen lain */

      }
        .testimonial-img {
    width: 100px; /* Ganti sesuai kebutuhan */
    height: 100px; /* Ganti sesuai kebutuhan */
    border-radius: 50%; /* Membuat gambar menjadi lingkaran */
    object-fit: cover; /* Memastikan gambar tetap proporsional */
}





</style>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h6 class="sitename" style="color: #ffffff; font-weight: bold;"> 
              <img src="assets/img/logo.png" alt="Logo" style="width: auto; height: 100px;">
              SDIT AJJIHAN 
              <br>
              <span style="font-size: 12px; margin-left: 50px;">sekolah berbasis b.c.c.t</span>
              </br>
            </h6>
          </a>
          

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#sentra">Sentra</a></li>
          <li><a href="#portfolio">Kegiatan</a></li>
          <li><a href="#team">Pendidik</a></li>
          <li><a href="#sosmed">Jelajahi</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
<!-- Hero Section -->
<section id="hero" class="hero section" style="height: 100vh;">
    <div id="hero-carousel" data-bs-interval="5000" class="container-fluid carousel carousel-fade" data-bs-ride="carousel" style="padding: 0; margin: 0;">
  
      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url('assets/img/slide4.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="color: #d8e6ed; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Selamat Datang di <span>SDIT AJJIHAN</span></h2>
          <p class="animate__animated animate__fadeInUp" style="color: #d8e6ed;">Sekolah Berbasis B.C.C.T</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color: #1e9fd2; border-color: #1e9fd2; color: #fff;">Read More</a>
        </div>
      </div>
  
      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url('assets/img/slider-img.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="color: #d8e6ed; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Selamat Datang di <span>SDIT AJJIHAN</span></h2>
          <p class="animate__animated animate__fadeInUp" style="color: #d8e6ed;">Sekolah Berbasis B.C.C.T</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color: #1e9fd2; border-color: #1e9fd2; color: #fff;">Read More</a>
        </div>
      </div>
  
      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url('assets/img/slide5.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="color: #d8e6ed; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Selamat Datang di <span>SDIT AJJIHAN</span></h2>
          <p class="animate__animated animate__fadeInUp" style="color: #d8e6ed;">Sekolah Berbasis B.C.C.T</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color: #1e9fd2; border-color: #1e9fd2; color: #fff;">Read More</a>
        </div>
      </div>
  
      <!-- Navigation Controls -->
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
  
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>
  </section>
  

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" >
        <h2>Tentang</h2>
        <p>Sekolah Kami</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p style="font-size: 24px; font-weight: bold;" >
              Kenapa Harus di SDIT AJJIHAN ?
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Sekolah Berbasis B.C.C.T</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Sekolah yang Mengembangankan 20 sikap</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Seven Life Skill Essensial</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Sekolah dengan Menerapkan 6 Sikap </span></li>
              <li><i class="bi bi-check2-circle"></i> <span>10 Kecerdasan Jamak(Multiple Intellegence) </span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p style="font-size: 24px; font-weight: bold;">Visi dan Misi SDIT AJJIHAN</p>
            <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Mengoptimalkan tahapan perkembangan anak</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Menuju manusia yang understanding, adaptable, dan terampil</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Menjadikan manusia seutuhnya yang ulil albab, sesuai dengan fitrahnya</span></li>
              </ul>
            <a href="#features" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">
    <h2 style="text-align:center">Profil SDIT AJJIHAN</h2> <br>
    {{-- <h5 style="text-align:center">terdapat 6 sentra</h5> <br> --}}
        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-4 text-center" style="margin-bottom: 30px;">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              {{-- <i class="bi bi-binoculars"></i> --}}
              <h5 style="color: #000000">Sejarah SDIT AJJIHAN</h5>
            </a>
          </li>
          <li class="nav-item col-4 text-center" style="margin-bottom: 30px;">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <h5 style="color: #000000">Apa itu Sekolah Berbasis B.B.B.T ?</h5>
            </a>
          </li>
          <li class="nav-item col-4 text-center" style="margin-bottom: 30px;">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <h5 style="color: #000000">Apa yang Unik dari SDIT AJJIHAN ? </h5>
            </a>
          </li>
          
          {{-- <li class="nav-item col-4 text-center">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                <h5>Sentra Drama</h5>
            </a>
          </li>
          <li class="nav-item col-4 text-center">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                <h5>Sentra Sains</h5>
            </a>
          </li>
          <li class="nav-item col-4 text-center">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                <h5>Sentra Imtaq</h5>
            </a>
          </li> --}}
          {{-- <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li> --}}
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Sejarah SDIT AJJIHAN</h3>
                <p class="fst-italic">
                  Sekolah SDIT AJJIHAN adalah sekolah swasta yang berada di yayasan Wahdatul Ummi, yayasana Wahdatul Ummi ini juga memiliki taman kanak-kanak bernama Taman Kanak-Kanan Pink.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
                <a href="/blog" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color: #1e9fd2; border-color: #1e9fd2; color: #fff;">Read More</a>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/slide2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Apa itu Sekolah Berbasis B.C.C.T ?></h3>
                <p>
                  Model pembelajaran BCCT (Beyond Centers and Circle Time) atau yang umum dikenal dengan istilah model pembelajaran sentra yaitu seluruh proses pembelajaran berpusat pada anak.
                   Pendekatan BCCT bertujuan menfasilitasi anak agar dapat tumbuh dan berkembang sesuai dengan potensi dan minat yang dimilikinya.
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/sentra/sentra-matematika.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Apa yang unik dari SDIT AJJIHAN jika dibandingkan dengan Sekolah Dasar lainnya?</h3>
                <p>
                  Model pembelajaran sentra memiliki perbedaan utama dalam pendekatan dan lingkungan belajarnya dibandingkan dengan model pembelajaran lainnya. Berikut beberapa poin perbedaannya :
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Berbasis pada Minat Anak</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Lingkungan Belajar yang Fleksibel</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Pendekatan Holistik</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/sentra/sentra-bahasa.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Selamat Datang di Sentra Drama</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->
          <div class="tab-pane fade" id="features-tab-5">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Selamat Datang di Sentra Sains</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/sentra/sentra-sains.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->
          <div class="tab-pane fade" id="features-tab-6">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Selamat Datang di Sentra Imtaq</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Call To Action Section -->
      <section id="call-to-action" class="call-to-action section dark-background">
        <div class="container">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
              <h3>Pendaftaran Peserta Didik Baru 2024 / 2025</h3>
              <p>Daftarkan Ananda di SDIT AJJIHAN melalui google form yang sudah disediakan. Kuota Terbatas !!</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="https://bit.ly/PPDB_SDIT_AJJIHAN">Klik Link disini</a>
            </div>
          </div>
        </div>
      </section><!-- /Call To Action Section -->

    <!-- Services Section -->
    <section id="sentra" class="sentra section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sentra</h2>
        <p>Terdapat 6 Sentra di SDIT AJJIHAN</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative" style="background-color: #eaf9ff; padding: 10px;">
              {{-- <div class="icon">
                <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
              </div> --}}
              <a href="/sentra-seni" class="stretched-link">
                <h3 style="text-align: center;">Sentra Seni</h3>
              </a>
              <p style="text-align: center;">Siswa diajak untuk mengeksplorasi kreativitas mereka melalui kegiatan menggambar, melukis, dan membuat kerajinan tangan dari bahan bekas.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative" style="background-color: #eaf9ff; padding: 10px; ">
              {{-- <div class="icon">
                <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
              </div> --}}
              <a href="/sentra-matematika" class="stretched-link">
                <h3 style="text-align: center;">Sentra Matematika</h3>
              </a>
              <p style="text-align: center;">Menyediakan pengalaman belajar yang menarik dan aplikatif untuk memahami konsep matematika secara mendalam.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative" style="background-color: #eaf9ff; padding: 10px;">
              {{-- <div class="icon">
                <i class="bi bi-chat-text" style="color: #20c997;"></i>
              </div> --}}
              <a href="/sentra-bahasa" class="stretched-link">
                <h3 style="text-align: center;">Sentra Bahasa</h3>
              </a>
              <p style="text-align: center;">Meningkatkan kemampuan komunikasi dan penguasaan bahasa melalui berbagai kegiatan menarik dan interaktif.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative" style="background-color: #eaf9ff; padding: 10px;">
              {{-- <div class="icon">
                <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
              </div> --}}
              <a href="/sentra-drama" class="stretched-link">
                <h3 style="text-align: center;">Sentra Drama</h3>
              </a>
              <p style="text-align: center;">Mendorong siswa untuk berani tampil dan berkreasi melalui seni peran dan teater.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative" style="background-color: #eaf9ff; padding: 10px;">
              {{-- <div class="icon">
                <i class="bi bi-globe" style="color: #6610f2;"></i>
              </div> --}}
              <a href="/sentra-sains" class="stretched-link">
                <h3 style="text-align: center;">Sentra Sains</h3>
              </a>
              <p style="text-align: center;">Menggali rasa ingin tahu siswa melalui eksperimen dan penemuan dalam dunia sains.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative" style="background-color: #eaf9ff;">
              {{-- <div class="icon">
                <i class="bi bi-clock" style="color: #f3268c;"></i>
              </div> --}}
              <a href="/sentra-imtaq" class="stretched-link">
                <h3 style="text-align: center;">Sentra Imtaq</h3>
              </a>
              <p style="text-align: center;">Mengajarkan nilai-nilai iman, takwa, dan akhlak untuk membentuk karakter yang baik.
              </p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-9 text-center text-xl-start">
        <h3>Pendaftaran Peserta Didik Baru 2024 / 2025</h3>
        <p>Daftarkan Ananda di SDIT AJJIHAN melalui google form yang sudah disediakan. Kuota Terbatas !!</p>
      </div>
      <div class="col-xl-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="https://bit.ly/PPDB_SDIT_AJJIHAN">Klik Link disini</a>
      </div>
    </div>
  </div>
</section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
 <!-- Testimonials Section -->
 <section id="testimonials" class="testimonials section"  style="background-color: #88b5c7;">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kegiatan </h2>
    <p>Muatan Lokal</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 10
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/sentra-sains.jpeg" class="testimonial-img" alt="">
            <h3>BTQ</h3>
            <h4>Bersama bu Afifah</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegiatan BTQ atau Baca Tulis Qur'an akan dilakukan di setiap hari Senin, Selasa, dan Rabu, agar ananda dapat mengenal lebih dalam tentang huruf huruf hijaiyah.</span> <br><br>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/slide2.jpg" class="testimonial-img" alt="">
            <h3>English Club</h3>
            <h4>Bersama Bu Nadhifa</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegiatan English Club dilakukan di setiap hari Senin, Selasa, dan Rabu, dengan banyaknya kegiatan dalam kelas yang membuat kelas menjadi lebih menyenangkan</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Menari</h3>
            <h4>Bersama bu Linda, bu Afifah, bu Fatimah, & bu Tami</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kelaas Menari dilakukan setiap hari jumat dengan guru yang berbeda</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Menyanyi</h3>
            <h4>Bersama bu Syifa</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegiatan Menyanyi dilakukan setiap hari jumat</span><br><br><br><br>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Membaca</h3>
            <h4>Bersama bu Syifa & bu Tami</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegiatan Membaca dilakukan setipa hari Senin, Selasa, dan Rabu untuk penguatan ananda dalam mengenal huruf-huruf, selain itu ananda yang sudah dapat membaca juga diajarkan bagaiamana cara memahami isi teks yang dibaca.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Alat Musik</h3>
            <h4>Bersama bu Nadhifa & bu Najwa</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegaitan bermain Alat musik dilakukan setiap hari jumat, untuk saat ini kelas alat musik akan berfokus terlebih dahulu pada alat pianika, anak-anak diharapkan dapat mengetahui perbedaan nada dan dapat menyanyikan lagu dari alat musik.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Berkebun</h3>
            <h4>Bersama pak Tanjung& bu Fatimah</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegiatan berkebun dilakukan setiap hari kamis dan juga jumat. Pda kegiatan ini anak-anak diajarkann bagaimana craa menjaga tanaman dengan benar, anak juga diperkenalkan pada berbagai jenis tanamana, tak hanny itu anannda nantinya juga diajarkan dan mempraktekan bagaiamana cara menanam tanaman.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Gross Motor</h3>
            <h4>Bersama bu Fatimah & bu Najwa</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Kegiatan gross Motor dilakukan setiap hari Senin dan Selasa. Pada kegiatan Gross Motor anak-anak diajarkan bagaimana cara menjaga keseimbangan tubuh, dan bagaiaman cara mengontrol diri ketika berkegiatan diluar kelas.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Kegiatan </h2>
      <p>Ekstrakulikuler</p>
    </div><!-- End Section Title -->
  
    <div class="container" data-aos="fade-up" data-aos-delay="100">
  
      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 10
              }
            }
          }
        </script>
        <div class="swiper-wrapper">
  
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/sentra-sains.jpeg" class="testimonial-img" alt="">
              <h3>Pramuka</h3>
              <h4>Bersama kak Najwa & kak Fatimah</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
  
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/slide2.jpg" class="testimonial-img" alt="">
              <h3>Karate</h3>
              <h4>Bersama bu Najwa, bu Fatimah, & bu Tami</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
  
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Renang</h3>
              <h4>Bersama semua guru</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
  
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Enterpreneur</h3>
              <h4>Bersama semua guru</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
  
        </div>
        <div class="swiper-pagination"></div>
      </div>
  
    </div>


      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan</h2>
        <p>Dokumentasi Kegiatan</p>
      </div><!-- End Section Title -->

      

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            {{-- <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li> --}}
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/slider-img.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan 17 Agustus ke 79</h4>
                {{-- <p>Lorem ipsum, dolor sit</p> --}}
                <a href="assets/img/slider-img.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/slide2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/slide2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/slide3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/slide3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/sentra/sentra-matematika.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/sentra/sentra-matematika.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/sentra/sentra-bahasa.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/sentra/sentra-bahasa.jpeg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/sentra/sentra-sains.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/sentra/sentra-sains.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>PPDB</h2>
    <p>Pendafataran Peserta Didik Baru 2024 - 2025</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-3">

      <!-- Baris Pertama -->
      <div class="col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-item">
          <div class="position-relative">
            <img src="assets/img/ppdb/1.png" alt="Pricing Image" class="img-fluid">
            <a href="assets/img/ppdb/1.png" title="Zoom Image" data-gallery="portfolio-gallery" class="glightbox preview-link icon-zoom">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-item featured">
          <div class="position-relative">
            <img src="assets/img/ppdb/2.png" alt="Pricing Image" class="img-fluid">
            <a href="assets/img/ppdb/2.png" title="Zoom Image" data-gallery="portfolio-gallery" class="glightbox preview-link icon-zoom">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-item">
          <div class="position-relative">
            <img src="assets/img/ppdb/3.png" alt="Pricing Image" class="img-fluid">
            <a href="assets/img/ppdb/3.png" title="Zoom Image" data-gallery="portfolio-gallery" class="glightbox preview-link icon-zoom">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <!-- Baris Kedua -->
      <div class="col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="pricing-item">
          <div class="position-relative">
            <img src="assets/img/ppdb/4.png" alt="Pricing Image" class="img-fluid">
            <a href="assets/img/ppdb/4.png" title="Zoom Image" data-gallery="portfolio-gallery" class="glightbox preview-link icon-zoom">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="pricing-item">
          <div class="position-relative">
            <img src="assets/img/ppdb/5.png" alt="Pricing Image" class="img-fluid">
            <a href="assets/img/ppdb/5.png" title="Zoom Image" data-gallery="portfolio-gallery" class="glightbox preview-link icon-zoom">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="600">
        <div class="pricing-item">
          <div class="position-relative">
            <img src="assets/img/ppdb/6.png" alt="Pricing Image" class="img-fluid">
            <a href="assets/img/ppdb/6.png" title="Zoom Image" data-gallery="portfolio-gallery" class="glightbox preview-link icon-zoom">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

    </div>

  </div>

</section><!-- /Pricing Section -->


    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Frequently Asked Questions</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="custom-accordion" id="accordion-faq">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                    How to download and register?
                  </button>
                </h2>

                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                  <div class="accordion-body">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated
                    they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                How to create your paypal account?
              </button>
            </h2>
            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                    <div class="accordion-body">
                      A small river named Duden flows by their place and supplies it
                      with the necessary regelialia. It is a paradisematic country, in
                      which roasted parts of sentences fly into your mouth.
                    </div>
              </div>
            </div>
            <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  How to link your paypal and bank account?
                </button>
              </h2>

              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  When she reached the first hills of the Italic Mountains, she
                  had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the subline
                  of her own road, the Line Lane. Pityful a rethoric question ran
                  over her cheek, then she continued her way.
                </div>
              </div>
            </div>
            <!-- .accordion-item -->

          </div>
        </div>
      </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Guru-guru SDIT AJJIHAN</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Eka Puji Astuti, S.s</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nilawati, M.Pd</h4>
                <i style="color:#939596 ">Wakil Kepala Sekolah</i>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Linda Ferawati, S.Pd</h4>
                <span>Operator</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nadhifa, S.Pd</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Afifah Zahran Nurfasa, S.Pd</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Pipih Nurasiah Jamil, S.Ag</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sipah Nur Wahidah</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/bu-fatim.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Siti Fatimah</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Siti Najwa Sakila</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Tami Amalia</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Zikra Cahya Utami </h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Pak Ustadz</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Pak Tanjung</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Recent Posts Section -->
    <section id="sosmed" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sosial Media</h2>
        <p>SDIT AJJIHAN<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="https://youtu.be/POjqa9KzUyM?si=-htDSw2ioDZ5PVrx">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Silahkan Hubungi Kami</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl.Tegal Munjul, Pasanggrahan, Kec. Solear, Kabupaten Tangerang, Banten 15730</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Nomor Telepon</h3>
                <p>+62 851-8065-0389</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>sditajjihan1310@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          {{-- <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form --> --}}

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Selecao</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Selecao</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
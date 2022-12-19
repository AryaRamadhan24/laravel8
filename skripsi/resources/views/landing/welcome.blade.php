@extends('layouts.applanding')

@section('content')
 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/logo1.png')}}" alt="">
        <h1>AdilBrother's</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="get-a-quote" href="{{ route('login') }}">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Sistem Pakar Diagnosa Penyakit Sapi Perah</h2>
          <p data-aos="fade-up" data-aos-delay="100">Mendiagnosa gangguan pada sapi perah anda</p>
        
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{asset('assets/img/cow breeder.png')}}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-sharp fa-solid fa-stethoscope"></i></div>
            <div>
              <h4 class="title">Diagnosa</h4>
              <p class="description">Sistem akan mendiagnosa penyakit sesuai dengan gejala yang terjadi pada sapi anda.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-vial-circle-check"></i></div>
            <div>
              <h4 class="title">Pengobatan</h4>
              <p class="description">Sistem akan memberikan solusi serta cara pengobatan sapi anda yang terkena penyakit.</p>
            </div>
          </div><!-- End Service Item --> 

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-sharp fa-solid fa-cow"></i></div>
            <div>
              <h4 class="title">Pendataan</h4>
              <p class="description">Menyimpan data-data terkait sapi anda</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{asset('assets/img/farm.png')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
            Sistem ini dibangun oleh Muhammad Arya Ramadhan salah satu Mahasiswa Fakultas Ilmu Komputer Program Studi Teknologi Informasi. Sistem ini dibangun untuk UD. Adil Brother's agar mempermudah dalam pengelolaan sapi perah, khususnya sapi perah yang terjangkit penyakit. Dengan adanya sistem pakar ini, diharpak peternak sapi yang ada di Kabupaten Lumajang khususnya Kecamatan Senduro yang bekerja sama dengan UD. Adil Brother's mampu merawat secara mandiri jika sapi yang diternak mengidap penyakit.  
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->


    <!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="{{ route('register') }}">Register</a>
          </div>
        </div>

      </div>
    </section>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @endsection

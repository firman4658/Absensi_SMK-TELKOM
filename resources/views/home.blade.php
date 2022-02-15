@extends('template.homestyle')
@section('home')
<header id="header">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="index.html">Bocor<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="getstarted scrollto" href="#about">Absen</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->   

  </div>
</header>

<section id="hero">

  <div class="container">
    <div class="row d-flex align-items-center">
    <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
      <h1>Your new digital experience with Bocor</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
      <img src="{{asset('assets/img/hero-img.png')}}"class="img-fluid" alt="">
    </div>
  </div>
  </div>

</section>
<!--bagian ats-->

<main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="" data-aos="flip-right">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{asset('assets/img/clients/client-2.png')}}"class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container">

      <div class="row gy-4">
        <div class="image col-xl-5"></div>
        <div class="col-xl-7">
          <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
            <h3 data-aos="fade-in" data-aos-delay="100">Voluptatem dignissimos provident quasi</h3>
            <p data-aos="fade-in">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <div class="row gy-4 mt-3">
              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="bx bx-receipt"></i>
                <h4><a href="#">Corporis voluptates sit</a></h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-cube-alt"></i>
                <h4><a href="#">Ullamco laboris nisi</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-images"></i>
                <h4><a href="#">Labore consequatur</a></h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-shield"></i>
                <h4><a href="#">Beatae veritatis</a></h4>
                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section>

@endsection
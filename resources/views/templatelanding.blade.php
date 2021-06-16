<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('judul')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    {{-- <link href="{{asset('assets/img/favicon.png')}}" rel="icon" />
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" /> --}}
    <link rel="icon" href="{{asset('img/kampus-indonesia.png')}}" type="image/png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style = "background-color:#1264c2;">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="index.html">Kampus Indonesia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="{{url('home')}}">Home</a></li>

            <li><a href="{{url('home/#services')}}">Layanan Kami</a></li>
            <li><a href="{{url('home/#about')}}">Tentang Kami</a></li>

            <li><a href="{{url('home/#contact')}}">Hubungi Kami</a></li>


            @if (Auth::check())
            <li class="drop-down">
                <a href="">{{Auth::user()->name}}</a>
                <ul>

                  <li>
                    <a href="{{route('logout')}}">Login Admin</a></li>
                  <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
              </li>
              @else
              <a href="{{url('login')}}" class="get-started-btn scrollto">Anda Belum Login</a>

              @endif
          </ul>
        </nav>
        <!-- .nav-menu -->

       </div>
    </header>
    <!-- End Header -->




    @yield('content')



     <!-- ======= Footer ======= -->
     <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Kampus Indonesia</h3>
                <p>
                  Malang, Jawa Timur<br />
                 Indonesia <br /><br />
                  <strong>Phone:</strong> +1 5589 55488 55<br />
                  <strong>Email:</strong> info@example.com<br />
                </p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Link Penting</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan Kami</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#contact">Hubungi Kami</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Layanan Kami</h4>
                <ul>

                  <li><i class="bx bx-chevron-right"></i> <a href="#">Webinar</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Media Partner</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Online Course</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Link Sosial Media Kami</h4>
                <p>Berikut merupakan beberapa link penting, yaitu berupa Media Sosial Kami : </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright 2021 <strong><span>Kampus Indonesia</span></strong
            >. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://www.linkedin.com/in/fairuz-firjatullah-57370a1a7/">Fairuz Firjatullah</a>
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
      <div id="preloader"></div>

      <!-- Vendor JS Files -->
      <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
      <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
  </html>

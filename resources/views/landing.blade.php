<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Selamat Datang di - Kampus Indonesia !!</title>
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
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="#">Kampus Indonesia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.html">Home</a></li>

            <li><a href="#services">Layanan Kami</a></li>
            <li><a href="#about">Tentang Kami</a></li>

            <li><a href="#contact">Hubungi Kami</a></li>


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


        {{-- @if (Auth::check())
        <span> {{Auth::user()->name}} </span>
        @else
        <a href="{{url('login')}}" class="get-started-btn scrollto">Anda Belum Login</a>
        @endif --}}

      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Selamat Datang di Kampus Indonesia !!</h1>
            <h2>Platform Informasi Seputar Akademik dan Dunia Kerja yang sangat bermanfaat untuk anda !</h2>
            <div class="d-lg-flex">
              <a href="#contact" class="btn-get-started scrollto">Ingin Bergabung ?</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">




 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Layanan Kami</h2>
        <p>
         Berikut merupakan Berbagai Layanan yang kami berikan untuk Teman - teman semua :)
        </p>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <center>
          <div class="icon-box">

            <div class="icon"> <i> <img src="{{asset('img/kampus.png')}}" alt="" style = "width:50%;"/></i></div>
            <h4><a href="">Informasi Kampus</a></h4>
            <p>menyediakan berbagai topik yang akan dibicarakan mengenai Kampus tersebut</p>

            <br>
            <a class = "btn btn-primary" href = "{{url('informasi-kampus')}}"> Yok Jelajahi ! </a>

          </div>
        </center>
        </div>


        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">

            <center>
          <div class="icon-box">
            <div class="icon"><i><img src="{{asset('img/jurusan.png')}}" alt="" style = "width:50%;"/></i></div>
            <h4><a href="">Informasi Jurusan</a></h4>
            <p>menyediakan berbagai topik yang akan dibicarakan mengenai Jurusan dan Informasinya</p>

            <br>
            <a class = "btn btn-primary" href = "{{url('informasi-jurusan')}}"> Yok Jelajahi ! </a>
          </div>
        </center>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <center>
          <div class="icon-box">
            <div class="icon"><i><img src="{{asset('img/artikel.png')}}" alt="" style = "width:50%;"/></i></div>
            <h4><a href="">Artikel Bermanfaat</a></h4>
            <p>Banyak Artikel Bermanfaat yang dapat diakses oleh siapa saja yang membuka</p>
            <br>
            <a class = "btn btn-primary" href = "{{url('artikel-blog')}}"> Yok Jelajahi ! </a>
          </div>
        </center>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <center>
          <div class="icon-box">
            <div class="icon"><i><img src="{{asset('img/beasiswamagang.png')}}" alt="" style = "width:50%;"/></i></div>
            <h4><a href="">Beasiswa / Magang</a></h4>
            <p>Informasi mengenai magang / Beasiswa dapat diakses sehingga banyak manfaatnya</p>
            <a class = "btn btn-primary" href = "{{url('artikel-beasiswa-magang')}}"> Yok Jelajahi ! </a>
        </div>
        </center>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->








      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Tentang Kami</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>Kampus Indonesia merupakan salah satu platform Media Informasi yang : </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sumber Sangat Terpercaya</li>
                <li><i class="ri-check-double-line"></i> Pembangkit Semangat Profesionalitas </li>
                <li><i class="ri-check-double-line"></i> Platform terbaik karena paling dicari mahasiswa dan fresh graduate</li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
               Kampus Indonesia didirikan pada tahun 2015 dengan tagar #mudadanmenginspirasi. Selain berperan sebagai platform media informasi, Kampus
               Indonesia juga berperan sebagai media penting untuk transfer ilmu mengenai akademik dan dunia industri seperti apa.
              </p>
              <a href="#" class="btn-learn-more">Berminat ?</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->






      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Testimoni</h2>
            <p>
                Berikut merupakan testimoni dari para partisipan setia dari Kampus Indonesia :
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="{{asset('assets/img/team/team-3.jpg' )}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->



      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Hubungi Kami</h2>
            <p>
             Anda Berminat untuk menghubungi kami ? Silakan ketik pesan untuk kami. Terima kasih
            </p>
          </div>

          <div class="row">
            {{-- <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 290px"
                  allowfullscreen
                ></iframe>
              </div>
            </div> --}}

            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="{{route('tanggapan.store')}}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Nama Anda</label>
                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Email Anda</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Perihal / Judul</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <label for="name">Isi Pesan</label>
                  <textarea class="form-control" id = "message" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

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
            &copy; Copyright <strong><span>Kampus Indonesia</span></strong
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

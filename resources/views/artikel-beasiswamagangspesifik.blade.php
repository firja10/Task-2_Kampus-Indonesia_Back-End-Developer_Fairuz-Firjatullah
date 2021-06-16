@extends('templatelanding')



@section("judul")
Informasi Beasiswa / Magang Spesifik
@endsection

@section('content')



    <main id="main" style = "margin-top:50px;">






        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <h2>Deskripsi Program {{$artikelbeasiswamagangs->namamagangbeasiswa}}</h2>

              </div>

              <div class="row content">
                <div class="col-lg-6">
                    <img src="@empty(!$artikelbeasiswamagangs->foto_institusi){{ asset('storage/Artikelbeasiswamagang/'.$artikelbeasiswamagangs->foto_institusi) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="" style = "width:100%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h4>Informasi Beasiswa / Magang</h4>
                    <p>{{$artikelbeasiswamagangs->deskripsi}}</p>

                </div>
              </div>

            </div>
        </section>








    <!-- ======= Services Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Waktu / Timeline Pelaksanaan</h2>
          </div>




          <div class="row" style = "margin-top:50px;">
            <div class="col-lg-12">
                @php
                $gariswaktu = explode(". ", $artikelbeasiswamagangs->timeline);
                @endphp
                <h4> Untuk Waktu Pelaksanaan Program ini yaitu dari tanggal {{date('d F y', strtotime($artikelbeasiswamagangs->tanggal_mulai))}} hingga {{date('d F y', strtotime($artikelbeasiswamagangs->tanggal_akhir))}} dengan Timeline sebagai berikut :</h4>
                <p>
                    <ul>
                        @foreach ($gariswaktu as $waktu )
                        <li>
                        {{ $waktu }}
                          </li>
                        @endforeach

                        </ul>
                </p>

            </div>

          </div>




        </div>
      </section>
      <!-- End Services Section -->




      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Persyaratan Program {{$artikelbeasiswamagangs->namamagangbeasiswa}}</h2>

          </div>

          <div class="row content">

            <div class="col-lg-12">

                @php
                    $syarat = explode(". ", $artikelbeasiswamagangs->persyaratan);
                @endphp

                <p>
                    <ul>

                    @foreach ($syarat as $syaratan )
                    <li>
                    {{ $syaratan }}
                      </li>
                    @endforeach

                    </ul>
                </p>

            </div>





          </div>

        </div>
    </section>




    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Kontak Penting {{$artikelbeasiswamagangs->namamagangbeasiswa}}</h2>

          </div>

          <div class="row content">
            <div class="col-lg-6" style = "text-align: center;">
                <h4>Instagram</h4>
                <a href="" class = "instagram" style = " font-size:100px;"> <i class = "bx bxl-instagram"></i> </a>
                <p>{{$artikelbeasiswamagangs->instagram}}</p>

            </div>
            <div class="col-lg-6" style = "text-align: center;">
                <h4>Nomor Telepon</h4>
                <a href="" class = "whatsapp" style = " font-size:100px;"> <i class = "bx bxl-whatsapp"></i> </a>
                <p>{{$artikelbeasiswamagangs->telepon}}</p>

            </div>
          </div>


        </div>
    </section>






















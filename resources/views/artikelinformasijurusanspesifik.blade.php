
@extends('templatelanding')

@section("judul")
Informasi Jurusan Spesifik
@endsection


@section('content')


<!-- ======= Hero Section ======= -->
<section id="ikonik" class="d-flex align-items-center" style = " background: linear-gradient(rgba(40, 58, 90, 0.6), rgba(40, 58, 90, 0.6)),
url('{{asset('storage/Artikelinformasijurusan/'.$artikelinformasijurusans->lambangprospek_kerja)}}'); background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{$artikelinformasijurusans->namajurusan}}</h1>
          <div class="d-lg-flex">
            <a href="#main" class="btn-get-started scrollto">Yok Cari Tahu !</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          {{-- <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="" /> --}}
          <img src="{{asset('storage/Artikelinformasijurusan/'.$artikelinformasijurusans->lambangjurusan)}}" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

    <main id="main" style = "margin-top:50px;">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Apa itu Jurusan {{$artikelinformasijurusans->namajurusan}} ?</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
            <img src="@empty(!$artikelinformasijurusans->lambangprospek_kerja){{ asset('storage/Artikelinformasijurusan/'.$artikelinformasijurusans->lambangprospek_kerja) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="" style = "width:100%;">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
            <h4>Informasi Kampus</h4>
            <p>{{$artikelinformasijurusans->deskripsi_jurusan}}</p>

        </div>
      </div>
{{--
      <div class="row content">
        <div class="col-lg-12">
            <h4>Berapa Jumlah Mahasiswa dan Dosennya ? </h4>

        </div>
      </div> --}}









    </div>
  </section>
  <!-- End Services Section -->





    <!-- ======= Services Section ======= -->
    <section id="about" class="about">
       <div class="container" data-aos="fade-up">
         <div class="section-title">
           <h2>Keahlian dan Pengetahuan</h2>
         </div>

         <div class="row content">
           <div class="col-lg-12" style = "text-align:center;">
            <h4>Keahlian dan Pengetahuan yang diperlukan di jurusan ini diantaranya </h4>
            <p>{{$artikelinformasijurusans->keahlian_dan_pengetahuan}}</p>

            </div>

         </div>

       </div>
     </section>
     <!-- End Services Section -->





         <!-- ======= Services Section ======= -->
    <section id="about" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Bagaimana Prospek Kerjanya ? </h2>
          </div>

          <div class="row content">

            <div class="col-lg-12" style = "text-align:center;">
                <h4> Prospek kerjanya yaitu diantaranya : {{$artikelinformasijurusans->prospek_kerja}}</h4>
            </div>
          </div>

        </div>
      </section>
      <!-- End Services Section -->













    </main>
    <!-- End #main -->
@endsection


@extends('templatelanding')

@section("judul")
Informasi Kampus Spesifik
@endsection


@section('content')


<!-- ======= Hero Section ======= -->
<section id="ikonik" class="d-flex align-items-center" style = " background: linear-gradient(rgba(40, 58, 90, 0.6), rgba(40, 58, 90, 0.6)),
url('{{asset('storage/infokampus/'.$infokampuses->foto_tempat)}}'); background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{$infokampuses->namakampus}}</h1>
          <h2>{{$infokampuses->alamatkampus}}</h2>
          <h2>Kontak : {{$infokampuses->telepon}}</h2>
          <div class="d-lg-flex">
            <a href="#main" class="btn-get-started scrollto">Yok Cari Tahu !</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          {{-- <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="" /> --}}
          <img src="{{asset('storage/infokampus/'.$infokampuses->lambangkampus)}}" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

    <main id="main" style = "margin-top:50px;">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Deskripsi {{$infokampuses->namakampus}}</h2>
        <p>
         Berikut merupakan Berbagai Kampus yang ingin dicari Informasinya oleh teman - teman :
        </p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
            <img src="@empty(!$infokampuses->foto_tempat){{ asset('storage/infokampus/'.$infokampuses->foto_tempat) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="" style = "width:100%;">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
            <h4>Informasi Kampus</h4>
            <p>{{$infokampuses->deskripsi_kampus}}</p>


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
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Ada Jurusan Apa Saja Kah di <br> {{$infokampuses->namakampus}} ?</h2>
        <p>
         Berikut merupakan Berbagai jurusan di {{$infokampuses->namakampus}} yang akan dicari Informasinya oleh teman - teman :
        </p>
      </div>


      <div class="row content">
        <div class="col-lg-12">


            @php
            $jurusans = explode(". ", $infokampuses->jurusankampus);
            @endphp


            <h4>


                <ul>

                    @foreach ($jurusans as $jurusancampus )
                    <li>
                    {{ $jurusancampus }}
                      </li>
                    @endforeach

                    </ul>


            </h4>

        </div>
      </div>









    </div>
  </section>
  <!-- End Services Section -->















    <!-- ======= Services Section ======= -->
    <section id="about" class="about">
       <div class="container" data-aos="fade-up">
         <div class="section-title">
           <h2>Berapa Jumlah Mahasiswa dan Dosennya ?</h2>
         </div>

         <div class="row content">
           <div class="col-lg-6" style = "text-align: center;">
            <h4>Jumlah Mahasiswa</h4>
            <p>Jumlah Mahasiswa keseluruhan pada tahun ini yaitu {{$infokampuses->jumlah_mahasiswa}}</p>

            </div>
           <div class="col-lg-6" style = "text-align: center;">
               <h4>Jumlah Dosen</h4>
               <p> Jumlah Dosen keseluruhan pada tahun ini yaitu {{$infokampuses->jumlah_dosen}}</p>
           </div>
         </div>

       </div>
     </section>
     <!-- End Services Section -->





         <!-- ======= Services Section ======= -->
    <section id="about" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Berapa Biaya Kuliahnya ?</h2>
          </div>

          <div class="row content">

            <div class="col-lg-12" style = "text-align:center;">
                <h4> Kisaran Biaya Kuliah di Kampus ini adalah Rp. {{$infokampuses->biaya_kuliah}}</h4>
            </div>
          </div>

        </div>
      </section>
      <!-- End Services Section -->













    </main>
    <!-- End #main -->
@endsection


@extends('templatelanding')

@section("judul")
Informasi Kampus
@endsection

@section('content')



    <main id="main" style = "margin-top:50px;">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>DAFTAR KAMPUS</h2>
        <p>
         Berikut merupakan Berbagai Kampus yang ingin dicari Informasinya oleh teman - teman :
        </p>
      </div>




      <div class="row">
        @foreach($infokampuses as $infocampus)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <center>
          <div class="icon-box">

            <div class="icon">

               <img src="@empty(!$infocampus->lambangkampus){{ asset('storage/infokampus/'.$infocampus->lambangkampus) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="" style = "width:100%;">

            </div>
            <h4><a href="">{{$infocampus->namakampus}}</a></h4>
            <p>{{Str::limit($infocampus->deskripsi_kampus,150)}}</p>

            <br>
            <a class = "btn btn-primary" href = "{{route('informasikampusspesifik', $infocampus->id)}}"> Yok Jelajahi ! </a>

          </div>
        </center>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- End Services Section -->

    </main>
    <!-- End #main -->

   @endsection

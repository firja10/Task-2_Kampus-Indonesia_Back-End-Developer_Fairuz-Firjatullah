@extends('templatelanding')
@section("judul")
Daftar Artikel Blog
@endsection
@section('content')





    <main id="main" style = "margin-top:50px;">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>DAFTAR ARTIKEL BERMANFAAT</h2>
        <p>
         Berikut merupakan Berbagai Artikel yang ingin dicari Informasinya oleh teman - teman :
        </p>
      </div>




      <div class="row">
        @foreach($artikelblogs as $artikelblog)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <center>
          <div class="icon-box">

            <div class="icon">

               <img src="@empty(!$artikelblog->foto_artikel){{ asset('storage/Artikelblog/'.$artikelblog->foto_artikel) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="" style = "width:100%;">

            </div>
            <h4><a href="">{{$artikelblog->judulartikel}}</a></h4>
            <p>{{ Str::limit($artikelblog->isiartikel,150)}}</p>

            <br>
            <a class = "btn btn-primary" href = "{{route('artikelblogspesifik', $artikelblog->id)}}"> Yok Jelajahi ! </a>

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

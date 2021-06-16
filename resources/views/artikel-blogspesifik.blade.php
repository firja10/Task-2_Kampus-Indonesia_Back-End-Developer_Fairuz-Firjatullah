@extends('templatelanding')

@section("judul")
Artikel Blog Spesifik
@endsection

@section('content')



    <main id="main" style = "margin-top:50px;">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>{{$artikelblogs->judulartikel}}</h2>
        <p>Artikel ini diedit pada {{$artikelblogs->updated_at}} Oleh <strong>{{$artikelblogs->penulisartikel}}</strong> </p>

      </div>




      <div class="row">
        <div class="col-lg-12">


         <center><img src="@empty(!$artikelblogs->foto_artikel){{ asset('storage/Artikelblog/'.$artikelblogs->foto_artikel) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="" style = "width:50%; text-align:center;border-radius:50px;"></center>

        </div>

      </div>

      <div class="row" style = "margin-top:50px;">
        <div class="col-lg-12">
            <p>{{$artikelblogs->isiartikel}}</p>

        </div>

      </div>
    </div>
  </section>
  <!-- End Services Section -->

    </main>
    <!-- End #main -->

@endsection

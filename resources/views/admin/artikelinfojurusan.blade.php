
@extends('admin.layout.app')
@section("content")

{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Artikel Informasi Jurusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">     <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Artikel Informasi Jurusan</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
              {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambahkan Artikel Informasi Jurusan/button> --}}
            </ol>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method = "POST" action = "{{route('artikelinfojurusan.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="namajurusan" class="col-form-label"  >Nama Jurusan</label>
                          <input type="text" class="form-control" id="namajurusan" name = "namajurusan">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi_jurusan" class="col-form-label">Deskripsi Artikel Informasi Jurusan</label>
                          {{-- <textarea class="form-control" id="deskripsi_jurusan" name = "deskripsi_jurusan"></textarea> --}}
                          <textarea name="deskripsi_jurusan" class = "form-control" id="deskripsi_jurusan" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="keahlian_dan_pengetahuan" class="col-form-label">Keahlian dan Pengetahuan</label>
                            {{-- <textarea class="form-control" id="deskripsi_jurusan" name = "deskripsi_jurusan"></textarea> --}}
                            <textarea name="keahlian_dan_pengetahuan" class = "form-control" id="keahlian_dan_pengetahuan" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="prospek_kerja" class="col-form-label">Prospek Kerja</label>
                            <textarea name="prospek_kerja" class = "form-control" id="prospek_kerja" cols="30" rows="10"></textarea>
                          </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      {{-- <button type="button" class="btn btn-primary" type = "submit" name = "submit">Kirim Data</button> --}}
                      <input type="submit" class = "btn btn-primary" value="Simpan" placeholder="Simpan">
                    </div>
                </form>
                  </div>
                </div>
              </div>



          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">



@foreach($artikelinformasijurusans as $artikelinfojurusan)



   <!-- Area Chart -->
   <div class="col-md-4 col-mb-3">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            {{-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
            </div> --}}
        </div>


        <!-- Card Body -->
        <div class="card-body" >
            {{-- <img class="card-img-top img-cover img-fluid" src="{{asset('dist/img/photo1.png')}}" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;"> --}}
            <img class="card-img-top img-cover img-fluid" src="@empty(!$artikelinfojurusan->lambangjurusan){{ asset('storage/artikelinformasijurusan/'.$artikelinfojurusan->lambangjurusan) }} @else {{asset('dist/img/photo1.png')}} @endempty" alt="Card image cap" style = "object-fit: cover;    width: 100%;
            height: 15vw;">


            <div class="card-body">
            {{-- <h5 class="card-title m-0 font-weight-bold text-dark" style = "text-align:center;">Ieu Aink</h5> --}}
        <center><h5 class="card-title m-0 font-weight-bold text-dark" style = "text-align:center;">{{$artikelinfojurusan->namajurusan}}</h5></center>
         <center>   <p class="card-text" style = "margin-top:5px;margin-bottom:5px;">{{ Str::limit($artikelinfojurusan->deskripsi_jurusan,150)}}</p> </center>
         {{-- <center> <a href="#" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Kelas</a></center> --}}







         <center>
            <form action="{{ route('artikelinfojurusan.destroy',$artikelinfojurusan->id) }}" method="POST">
             @csrf
             @method('DELETE')
{{--
             <a href="{{route('infokampus.edit',$class->id)}}" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Kelas</a> --}}
               <button class = "btn btn-danger" type = "submit" style = "margin-bottom:10px;margin-top:10px;">Hapus Kelas</button>
               {{-- <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditModal">Edit Artikel Informasi Jurusan/a> --}}
               <a href="#" style = "margin-bottom:10px;margin-top:10px; margin-left:5px;margin-right:5px;" class="btn btn-primary">Lihat Kelas</a>
               <a href="{{route('artikelinfojurusan.edit',$artikelinfojurusan->id)}}" style = "margin-bottom:10px;margin-top:10px;" class="btn btn-success">Edit Kelas</a>

            </form>

              </center>

            </div>








        </div>
    </div>
</div>


@endforeach












        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

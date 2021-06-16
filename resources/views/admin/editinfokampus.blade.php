@extends('admin.layout.app')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Informasi Kampus</h1>

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

<div class="col-md-6">
  <form method = "POST" action = "{{route('infokampus.update', $infokampuses->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="namakampus" class="col-form-label"  >Nama Kampus </label>
      <input type="text" class="form-control" id="namakampus" name = "namakampus" value = "{{$infokampuses->namakampus}}">
    </div>
    <div class="form-group">
      <label for="alamatkampus" class="col-form-label">Alamat Kampus</label>
      {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
      <input type="text" class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}">
    </div>

    <div class="form-group">
        <label for="lambangkampus" class="col-form-label">Upload Lambang Kampus</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="file" class="form-control" name="lambangkampus" id = "lambangkampus" value="{{$infokampuses->lambangkampus}}">
      </div>

      <div class="form-group">
        <label for="foto_tempat" class="col-form-label">Upload Foto Tempat Kampus</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="file" class="form-control" name="foto_tempat" id = "foto_tempat" value="{{$infokampuses->foto_tempat}}">
      </div>

      <div class="form-group">
        <label for="akreditasi" class="col-form-label">Akreditasi</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="text" class="form-control" id="akreditasi" name = "akreditasi" value = "{{$infokampuses->akreditasi}}">
      </div>

      <div class="form-group">
        <label for="deskripsi_kampus" class="col-form-label">Deskripsi Kampus</label>
        <textarea class="form-control" id="deskripsi_kampus" name = "deskripsi_kampus" value = "{{$infokampuses->deskripsi_kampus}}" cols="30" rows="10">{{$infokampuses->deskripsi_kampus}}</textarea>
        {{-- <input type="text" class="form-control" id="deskripsi_kampus" name = "deskripsi_kampus" value = "{{$infokampuses->deskripsi_kampus}}"> --}}
      </div>


      <div class="form-group">
        <label for="jurusankampus" class="col-form-label">Jurusan Kampus</label>
        <textarea class="form-control" id="jurusankampus" name = "jurusankampus" cols="30" rows="10" value = "{{$infokampuses->jurusankampus}}">{{$infokampuses->jurusankampus}}</textarea>
        {{-- <input type="text" class="form-control" id="deskripsi_kampus" name = "deskripsi_kampus" > --}}
      </div>

      <div class="form-group">
        <label for="jumlah_mahasiswa" class="col-form-label">Jumlah Mahasiswa</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="number" class="form-control" id="jumlah_mahasiswa" name = "jumlah_mahasiswa" value = "{{$infokampuses->jumlah_mahasiswa}}">
      </div>

      <div class="form-group">
        <label for="jumlah_dosen" class="col-form-label">Jumlah Dosen</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="number" class="form-control" id="jumlah_dosen" name = "jumlah_dosen" value = "{{$infokampuses->jumlah_dosen}}">
      </div>

      <div class="form-group">
        <label for="email" class="col-form-label">Email</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="text" class="form-control" id="email" name = "email" value = "{{$infokampuses->email}}">
      </div>

      <div class="form-group">
        <label for="website" class="col-form-label">Website</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="text" class="form-control" id="website" name = "website" value = "{{$infokampuses->website}}">
      </div>

      <div class="form-group">
        <label for="biaya_kuliah" class="col-form-label">Biaya Kuliah</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="text" class="form-control" id="biaya_kuliah" name = "biaya_kuliah" value = "{{$infokampuses->biaya_kuliah}}">


      </div>

      <div class="form-group">
        <label for="telepon" class="col-form-label">Nomor Telepon / HP</label>
        {{-- <textarea class="form-control" id="alamatkampus" name = "alamatkampus" value = "{{$infokampuses->alamatkampus}}"></textarea> --}}
        <input type="number" class="form-control" id="telepon" name = "telepon" value = "{{$infokampuses->telepon}}">
      </div>


      <input type="submit" class = "btn btn-primary" value="Simpan" placeholder="Simpan">
    </form>


    </div>










</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection

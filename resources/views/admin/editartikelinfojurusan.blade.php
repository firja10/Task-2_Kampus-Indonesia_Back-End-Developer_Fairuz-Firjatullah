@extends('admin.layout.app')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Informasi jurusan</h1>

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
  <form method = "POST" action = "{{route('artikelinfojurusan.update', $artikelinformasijurusans->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="namajurusan" class="col-form-label"  >Nama jurusan </label>
      <input type="text" class="form-control" id="namajurusan" name = "namajurusan" value = "{{$artikelinformasijurusans->namajurusan}}">
    </div>
    <div class="form-group">
      <label for="deskripsi_jurusan" class="col-form-label">Deskripsi jurusan</label>
      {{-- <textarea class="form-control" id="deskripsi_jurusan" name = "deskripsi_jurusan" value = "{{$artikelinformasijurusans->deskripsi_jurusan}}"></textarea> --}}
      {{-- <input type="text" class="form-control" id="deskripsi_jurusan" name = "deskripsi_jurusan" value = "{{$artikelinformasijurusans->deskripsi_jurusan}}"> --}}
      <textarea name="deskripsi_jurusan" class = "form-control" id="deskripsi_jurusan" cols="30" rows="10" value = "{{$artikelinformasijurusans->deskripsi_jurusan}}">{{$artikelinformasijurusans->deskripsi_jurusan}}</textarea>
    </div>

    <div class="form-group">
        <label for="keahlian_dan_pengetahuan" class="col-form-label">Keahlian dan Pengetahuan</label>
        <textarea name="keahlian_dan_pengetahuan" class = "form-control" id="keahlian_dan_pengetahuan" cols="30" rows="10" value = "{{$artikelinformasijurusans->keahlian_dan_pengetahuan}}">{{$artikelinformasijurusans->keahlian_dan_pengetahuan}}</textarea>
      </div>

      <div class="form-group">
        <label for="prospek_kerja" class="col-form-label">Prospek Kerja</label>
        <textarea name="prospek_kerja" class = "form-control" id="prospek_kerja" cols="30" rows="10" value = "{{$artikelinformasijurusans->prospek_kerja}}">{{$artikelinformasijurusans->prospek_kerja}}</textarea>
      </div>

    <div class="form-group">
        <label for="lambangjurusan" class="col-form-label">Upload Lambang Jurusan</label>
        <input type="file" class="form-control" name="lambangjurusan" id = "lambangjurusan" value="{{$artikelinformasijurusans->lambangjurusan}}">
      </div>

      <div class="form-group">
        <label for="lambangprospek_kerja" class="col-form-label">Upload Ilustrasi Prospek Kerja</label>
        <input type="file" class="form-control" name="lambangprospek_kerja" id = "lambangprospek_kerja" value="{{$artikelinformasijurusans->lambangprospek_kerja}}">
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

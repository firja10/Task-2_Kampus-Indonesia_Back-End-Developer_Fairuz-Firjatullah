@extends('admin.layout.app')
@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Informasi Beasiswa / Magang</h1>

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
  <form method = "POST" action = "{{route('artikelbeasiswamagang.update', $artikelbeasiswamagangs->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="namamagangbeasiswa" class="col-form-label"  >Nama Program</label>
        <input type="text" class="form-control" id="namamagangbeasiswa" name = "namamagangbeasiswa" value="{{$artikelbeasiswamagangs->namamagangbeasiswa}}">
      </div>
      <div class="form-group">
        <label for="deskripsi" class="col-form-label">Deskripsi</label>
        {{-- <textarea class="form-control" id="deskripsi" name = "deskripsi"></textarea> --}}
        <textarea name="deskripsi" class = "form-control" id="deskripsi" cols="30" rows="10" value="{{$artikelbeasiswamagangs->deskripsi}}">{{$artikelbeasiswamagangs->deskripsi}}</textarea>
      </div>

      <div class="form-group">
          <label for="persyaratan" class="col-form-label">Persyaratan</label>
          {{-- <textarea class="form-control" id="persyaratan" name = "persyaratan"></textarea> --}}
          <textarea name="persyaratan" class = "form-control" id="persyaratan" cols="30" rows="10" value="{{$artikelbeasiswamagangs->persyaratan}}">{{$artikelbeasiswamagangs->persyaratan}}</textarea>
        </div>

        <div class="form-group">
          <label for="timeline" class="col-form-label">Timeline Kegiatan</label>
          {{-- <textarea class="form-control" id="timeline" name = "timeline"></textarea> --}}
          <textarea name="timeline" class = "form-control" id="timeline" cols="30" rows="10" value="{{$artikelbeasiswamagangs->timeline}}">{{$artikelbeasiswamagangs->timeline}}</textarea>
        </div>




      <div class="form-group">
          <label for="partisipan" class="col-form-label">Partisipan</label>
          <input type="text" class="form-control" id="partisipan" name = "partisipan" value="{{$artikelbeasiswamagangs->partisipan}}">
        </div>

        <div class="form-group">
            <label for="tanggal_mulai" class="col-form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name = "tanggal_mulai" value="{{$artikelbeasiswamagangs->tanggal_mulai}}">
          </div>

          <div class="form-group">
            <label for="tanggal_akhir" class="col-form-label">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tanggal_akhir" name = "tanggal_akhir" value="{{$artikelbeasiswamagangs->tanggal_akhir}}">
          </div>


        <div class="form-group">
          <label for="telepon" class="col-form-label">Nomor Telepon</label>
          <input type="number" class="form-control" id="telepon" name = "telepon" value="{{$artikelbeasiswamagangs->telepon}}">
        </div>

        <div class="form-group">
          <label for="instagram" class="col-form-label">Instagram</label>
          <input type="text" class="form-control" id="instagram" name = "instagram" value="{{$artikelbeasiswamagangs->instagram}}">
        </div>


    <div class="form-group">
        <label for="foto_institusi" class="col-form-label">Upload Foto Institusi</label>
        {{-- <textarea class="form-control" id="isiartikel" name = "isiartikel" value = "{{$artikelblogs->isiartikel}}"></textarea> --}}
        <input type="file" class="form-control" name="foto_institusi" id = "foto_institusi" value="{{$artikelbeasiswamagangs->foto_institusi}}">
      </div>

      <input type="submit" class = "btn btn-primary" value="Simpan" placeholder="Simpan">
      <br>
    </form>


    </div>










</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection

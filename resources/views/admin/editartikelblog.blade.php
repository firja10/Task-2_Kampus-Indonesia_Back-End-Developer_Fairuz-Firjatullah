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
  <form method = "POST" action = "{{route('artikelblog.update', $artikelblogs->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="judulartikel" class="col-form-label"  >Judul Artikel </label>
      <input type="text" class="form-control" id="judulartikel" name = "judulartikel" value = "{{$artikelblogs->judulartikel}}">
    </div>
    <div class="form-group">
      <label for="isiartikel" class="col-form-label">Alamat Kampus</label>
      <textarea class="form-control" id="isiartikel" name = "isiartikel" value = "{{$artikelblogs->isiartikel}}" cols="30" rows="10">{{$artikelblogs->isiartikel}}</textarea>
      {{-- <input type="text" class="form-control" id="isiartikel" name = "isiartikel" value = "{{$artikelblogs->isiartikel}}"> --}}
    </div>

    <div class="form-group">
        <label for="katakunciartikel" class="col-form-label">Kata Kunci Artikel</label>
        <input type="text" class="form-control" id="katakunciartikel" name = "katakunciartikel" value = "{{$artikelblogs->katakunciartikel}}">
      </div>

      <div class="form-group">
        <label for="penulisartikel" class="col-form-label">Penulis Artikel</label>
        <input type="text" class="form-control" id="penulisartikel" name = "penulisartikel" value = "{{$artikelblogs->penulisartikel}}">
      </div>

      <div class="form-group">
        <label for="kategori_artikel" class="col-form-label">Kategori Artikel</label>
        {{-- <input type="text" class="form-control" id="penulisartikel" name = "penulisartikel"> --}}

        <select name="kategori_artikel" id="kategori_artikel" class = "form-control" value = "{{$artikelblogs->kategori_artikel}}">
            <option disabled selected value> -- Pilih Kategori Kembali-- </option>
            <option value="Beasiswa">Beasiswa</option>
            <option value="Magang">Magang</option>
            <option value="Akademik">Akademik</option>
            <option value="Umum">Umum</option>
        </select>
      </div>


    <div class="form-group">
        <label for="foto_artikel" class="col-form-label">Upload Foto Artikel</label>
        {{-- <textarea class="form-control" id="isiartikel" name = "isiartikel" value = "{{$artikelblogs->isiartikel}}"></textarea> --}}
        <input type="file" class="form-control" name="foto_artikel" id = "foto_artikel" value="{{$artikelblogs->foto_artikel}}">
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

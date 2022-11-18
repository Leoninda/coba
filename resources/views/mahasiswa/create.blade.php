@extends('mahasiswa.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Mahasiswa</div>
  <div class="card-body">
       
      <form action="{{ url('mahasiswa') }}" method="post" enctype="multipart/form-data>
        {!! csrf_field() !!}
        <label>Nim</label></br>
        <input type="text" name="nim" id="nim" class="form-control"></br>
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Kelas</label></br>
        <input type="text" name="kelas" id="kelas" class="form-control"></br>
        <label>Jurusan</label></br>
        <input type="text" name="jurusan" id="jurusan" class="form-control"></br>
        <label>Prodi</label></br>
        <input type="text" name="prodi" id="prodi" class="form-control"></br>
        <div class="col-xs-12 col-sm-12 col-md-12">
  <div class="form-group">
    <label>Image</label>
    <input type="file" name="file" class="form-control" placeholder="Upload Gambar">
    @error('file')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

  </div>

</div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>


  
@stop
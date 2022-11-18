@extends('mahasiswa.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Mahasiswa</div>
  <div class="card-body">
       
      <form action="{{ url('mahasiswa/' .$mahasiswa->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$mahasiswa->id}}" id="id" />
        <label>Nim</label></br>
        <input type="text" name="nim" id="nim" value="{{$mahasiswa->nim}}" class="form-control"></br>
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$mahasiswa->nama}}" class="form-control"></br>
        <label>Kelas</label></br>
        <input type="text" name="kelas" id="kelas" value="{{$mahasiswa->kelas}}" class="form-control"></br>
        <label>Jurusan</label></br>
        <input type="text" name="jurusan" id="jurusan" value="{{$mahasiswa->jurusan}}" class="form-control"></br>
        <label>Prodi</label></br>
        <input type="text" name="prodi" id="prodi" value="{{$mahasiswa->prodi}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
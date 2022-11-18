@extends('mahasiswa.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Leoninda Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $mahasiswa->nama }}</h5>
        <p class="card-text">Nim : {{ $mahasiswa->nim }}</p>
        <p class="card-text">Kelas : {{ $mahasiswa->kelas }}</p>
        <p class="card-text">Jurusan : {{ $mahasiswa->jurusan }}</p>
        <p class="card-text">Prodi : {{ $mahasiswa->prodi }}</p>
        <p class="card-file">Image : {{ $mahasiswa->image }}</p>
        
  </div>
    </hr>
  </div>
</div>
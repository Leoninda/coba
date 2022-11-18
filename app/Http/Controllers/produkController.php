<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index(){
       $produk = 'CILOR 15 BUNGKUS';
        return view ('testing', ['produk' => $produk]);
    
    }
   public function show()
   {
      $produk = ['Aqua 115 ml', 'Minuman bersoda','BukuIPS','Keyboard','Komputer'];
      return view('show', ['produk' => $produk]);
   }
   public function store(Request $request)
   {
      $fileName=$request->file->getClientOriginalName();
      $path=$request->file->store('public/images');
      if ($request->file('file')->isValid()) {
   //$request->file->move(public_path('public/images'));
         Produk::create([
            'nama'  => $request->nama,
            'nim' => $request->nim,
            'kelas'  => $request->kelas,
            'jurusan'   =>$request->jurusan,
            'prodi'  => $request->prodi,
            'file'=>pathinfo($path)['basename']
         ]);
                  return redirect('mahasiswa')->with(['success' => 'Data Berhasil Disimpan!']);
      }
   }
}


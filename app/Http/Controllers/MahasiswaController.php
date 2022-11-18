<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mahasiswa; //add Mahasiswa Model - Data is coming from the database via Model.
 
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show')->with('mahasiswa', $mahasiswa);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with('mahasiswa', $mahasiswa);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->update($input);
        return redirect('mahasiswa')->with('flash_message', 'mahasiswa Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('mahasiswa')->with('flash_message', 'Mahasiswa deleted!');  
    }
}
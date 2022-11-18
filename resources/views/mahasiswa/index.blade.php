@extends('mahasiswa.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel CRUD Leoninda </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-success btn-sm" title="Add New Mahasiswa">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Prodi</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->prodi }}</td>
                                        <td>{{ $item->image }}</td>
                                        <td><img src="{{ asset('storage/images/'.$item->file) }}" style="max-height:100px;
                                        max-width:100px;margin-top:1px;"></td>
  
                                        <td>
                                        <!-- <form action="{{ route('mahasiswa.destroy',$item->id) }}" method="post"> -->
                                        
                                            <a href="{{ url('/mahasiswa/' . $item->id) }}" title="View Mahasiswa"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/mahasiswa/' . $item->id . '/edit') }}" title="Edit Mahasiswa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/mahasiswa' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Mahasiswa" onclick="return confirm ("Confirm delete?)><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
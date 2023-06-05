@extends('layouts.master')

@section('content')


        <h4>Data Kereta Api</h4>
        <a href="{{ route('kereta.create') }}" class="btn btn-primary">Tambah Data</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kereta Api</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kereta as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kereta }}</td>
                <td>{{ $item->RPegawai->nama_pegawai }}</td>
                <td>{{ $item->RPegawai->jabatan }}</td>
                <td>
                    <a class="btn btn-warning" href="/kereta/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/kereta/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

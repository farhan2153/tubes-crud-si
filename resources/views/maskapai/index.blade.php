@extends('layouts.master')

@section('content')


        <h4>Data Maskapai Pesawat</h4>
        <a href="{{ route('maskapai.create') }}" class="btn btn-primary">Tambah Data</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Maskapai</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maskapai as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_pesawat }}</td>
                <td>{{ $item->RPegawai->nama_pegawai }}</td>
                <td>{{ $item->RPegawai->jabatan }}</td>
                <td>
                    <a class="btn btn-warning" href="/maskapai/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/maskapai/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

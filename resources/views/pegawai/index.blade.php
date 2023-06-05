@extends('layouts.master')

@section('content')


        <h4>Data Pegawai</h4>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                {{-- <th scope="col">Nama pengguna</th> --}}
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamain</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $item)
            <tr>
                <td>{{ $item->id }}</td>
                {{-- <td>{{ $item->id_user }}</td> --}}
                <td>{{ $item->nama_pegawai }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->notelp }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>{{ $item->tanggal_masuk }}</td>
                <td>
                    <a class="btn btn-warning" href="/pegawai/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/pegawai/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

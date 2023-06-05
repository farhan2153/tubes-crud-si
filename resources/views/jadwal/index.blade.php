@extends('layouts.master')

@section('content')


        <h4>Data Jadwal</h4>
        <a href="{{ route('jadwal.create') }}" class="btn btn-primary">Tambah Jadwal</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Tanggal Berangkat</th>
                <th scope="col">Tanggal Pesan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RKota->nama_kota_asal }}</td>
                <td>{{ $item->tanggal_berangkat }}</td>
                <td>{{ $item->tanggal_pesan }}</td>
                <td>
                    <a class="btn btn-warning" href="/jadwal/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/jadwal/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

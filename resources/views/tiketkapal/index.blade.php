@extends('layouts.master')

@section('content')


        <h4>Data Tiket Kapal</h4>
        <a href="{{ route('tiketkapal.create') }}" class="btn btn-primary">Tambah Data Tiket</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kapal Laut</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Harga</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiketkapal as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RKapalLaut->nama_kapal }}</td>
                <td>{{ $item->RJadwal->tanggal_berangkat }}</td>
                <td>{{ $item->RJadwal->RKota->nama_kota_asal }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->kelas }}</td>
                <td>
                    <a class="btn btn-warning" href="/tiketkapal/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/tiketkapal/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

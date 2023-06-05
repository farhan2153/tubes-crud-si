@extends('layouts.master')

@section('content')


        <h4>Data Tiket Kereta Api</h4>
        <a href="{{ route('tiketkeretaapi.create') }}" class="btn btn-primary">Tambah Data Tiket</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kereta</th>
                <th scope="col">Tanggal Berangkat</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Harga</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiketkeretaapi as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RKereta->nama_kereta }}</td>
                <td>{{ $item->RJadwal->tanggal_berangkat }}</td>
                <td>{{ $item->Rjadwal->RKota->nama_kota_asal }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->kelas }}</td>
                <td>
                    <a class="btn btn-warning" href="/tiketkeretaapi/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/tiketkeretaapi/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

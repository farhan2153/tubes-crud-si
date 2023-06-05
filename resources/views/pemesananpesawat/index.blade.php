@extends('layouts.master')

@section('content')


        <h4>Data Pemesanan Pesawat</h4>
        <a href="{{ route('pemesananpesawat.create') }}" class="btn btn-primary">Tambah Data Pemesanan</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Email Pengguna</th>
                <th scope="col">ID Tiket Pesawat</th>
                <th scope="col">Nama Maskapai</th>
                <th scope="col">Tanggal Berangkat</th>
                <th scope="col">Tanggal Pesan</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Jumlah Pemesanan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesananpesawat as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RUser->name }}</td>
                <td>{{ $item->RUser->email }}</td>
                <td>{{ $item->RTiketPesawat->id }}</td>
                <td>{{ $item->RTiketPesawat->RMaskapai->nama_pesawat }}</td>
                <td>{{ $item->RTiketPesawat->RJadwal->tanggal_berangkat }}</td>
                <td>{{ $item->RTiketPesawat->RJadwal->tanggal_pesan }}</td>
                <td>{{ $item->RTiketPesawat->RJadwal->RKota->nama_kota_asal }}</td>
                <td>{{ $item->jumlah_pemesanan }}</td>
                <td>
                    <a class="btn btn-warning" href="/pemesananpesawat/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/pemesananpesawat/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

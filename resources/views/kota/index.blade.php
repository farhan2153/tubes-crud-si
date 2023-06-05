@extends('layouts.master')

@section('content')


        <h4>Data Kota</h4>
        <a href="{{ route('kota.create') }}" class="btn btn-primary">Tambah Kota</a>
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kota Asal</th>
                <th scope="col">Nama Kota Tujuan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kota as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kota_asal }}</td>
                <td>{{ $item->nama_kota_tujuan }}</td>
                <td>
                    <a class="btn btn-warning" href="/kota/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/kota/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

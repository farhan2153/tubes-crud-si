@extends('layouts.master')

@section('content')


        <h4>Data Pengguna</h4>
        {{-- <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Pengguna</a> --}}
        <br><br> 

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama pengguna</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                {{-- <td>{{ $item->password }}</td> --}}
                {{-- <td>
                    <a class="btn btn-warning" href="/pengguna/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/pengguna/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

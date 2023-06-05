@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Kereta Api</h4>
        <form action="/kereta/update/{{$kereta->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_kereta" class="form-label">Nama Kereta Api</label>
                <input type="text" class="form-control" id="nama_kereta" name="nama_kereta" placeholder="Masukkan Nama Kereta Api" value="{{$kereta->nama_kereta}}">
            </div>
            <div class="form-group">
                <label for="id_pegawai" class="form-label">Nama Pegawai</label>
                <select class="form-control select2" style="width: 100%;" name="id_pegawai" id="id_pegawai">
                    <option disabled value>Pilih Nama Pegawai</option>
                    @foreach ($pegawai_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_pegawai }}></option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
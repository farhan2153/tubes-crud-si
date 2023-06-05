@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Kota</h4>
        <form action="/kota/update/{{$kota->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_kota_asal" class="form-label">Nama Kota Asal</label>
                <input type="text" class="form-control" id="nama_kota_asal" name="nama_kota_asal" placeholder="Masukkan Nama Kota Asal" value="{{$kota->nama_kota_asal}}">
            </div>
            <div class="form-group">
                <label for="nama_kota_tujuan" class="form-label">Nama Kota Tujuan</label>
                <input type="text" class="form-control" id="nama_kota_tujuan" name="nama_kota_tujuan" placeholder="Masukkan Kota Tujuan" value="{{$kota->nama_kota_tujuan}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
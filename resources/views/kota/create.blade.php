@extends('layouts.master')
@section('content')

        <form action="/kota" method="POST" class="">
            @csrf
            <div class="form-group">
            <div class="mb-3">
                <label for="nama_kota_asal" class="form-label">Nama Kota Asal</label>
                <input type="text" class="form-control" id="nama_kota_asal" name="nama_kota_asal" placeholder="Masukan Nama Kota Asal">
            </div>
            <div class="mb-3">
                <label for="nama_kota_tujuan" class="form-label">Nama Kota Tujuan</label>
                <input type="text" class="form-control" id="nama_kota_tujuan" name="nama_kota_tujuan" placeholder="Masukan Nama Kota Tujuan">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('kota.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
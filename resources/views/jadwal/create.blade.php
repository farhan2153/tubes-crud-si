@extends('layouts.master')
@section('content')

        <form action="/jadwal" method="POST" class="">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="id_kota" class="form-label">Nama Kota</label>
                    <select class="form-control select2" style="width: 100%;" name="id_kota" id="id_kota">
                        <option disabled value>Pilih Nama Kota</option>
                        @foreach ($kota_ as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kota_asal }}></option>
                        @endforeach
                    </select>
                </div>
            <div class="mb-3">
                <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat</label>
                <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" placeholder="Masukan Tanggal Berangkat">
            </div>
            <div class="mb-3">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" placeholder="Masukan Tanggal Pesan">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
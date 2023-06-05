@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Jadwal</h4>
        <form action="/jadwal/update/{{$jadwal->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_kota" class="form-label">Nama Kota</label>
                <select class="form-control select2" style="width: 100%;" name="id_kota" id="id_kota">
                    <option disabled value>Pilih Nama Kota</option>
                    @foreach ($kota_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kota_asal }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat</label>
                <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" placeholder="Masukkan Tanggal Berangkat" value="{{$jadwal->tanggal_berangkat}}">
            </div>
            <div class="form-group">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" placeholder="Masukkan Tanggal Pesan" value="{{$jadwal->tanggal_pesan}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
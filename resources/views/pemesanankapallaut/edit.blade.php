@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Pemesanan Kereta Api</h4>
        <form action="/pemesanankapallaut/update/{{$pemesanankapallaut->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_user" class="form-label">Nama Pengguna</label>
                <select class="form-control select2" style="width: 100%;" name="id_user" id="id_user">
                    <option disabled value>Pilih Nama Pengguna</option>
                    @foreach ($pengguna_ as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_tiket_kapal" class="form-label">ID Tiket Kapal Laut</label>
                <select class="form-control select2" style="width: 100%;" name="id_tiket_kapal" id="id_tiket_kapal">
                    <option disabled value>Pilih ID Tiket Kapal Laut</option>
                    @foreach ($tiketkapallaut_ as $item)
                        <option value="{{ $item->id }}">{{ $item->id }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_pemesanan" class="form-label">Jumlah Pemesanan</label>
                <input type="text" class="form-control" id="jumlah_pemesanan" name="jumlah_pemesanan" placeholder="Masukkan Jumlah Pemesanan" value="{{$pemesanankapallaut->jumlah_pemesanan}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
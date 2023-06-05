@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Pemesanan Kereta Api</h4>
        <form action="/pemesanankeretaapi/update/{{$pemesanankeretaapi->id}}" method="POST" class="w-25 mt-3">
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
                <label for="id_tiket_kereta" class="form-label">Nama ID Tiket Kereta Api</label>
                <select class="form-control select2" style="width: 100%;" name="id_tiket_kereta" id="id_tiket_kereta">
                    <option disabled value>Pilih ID Tiket Kereta Api</option>
                    @foreach ($tiketkeretaapi_ as $item)
                        <option value="{{ $item->id }}">{{ $item->id }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_pemesanan" class="form-label">Jumlah Pemesanan</label>
                <input type="text" class="form-control" id="jumlah_pemesanan" name="jumlah_pemesanan" placeholder="Masukkan Jumlah Pemesanan" value="{{$pemesanankeretaapi->jumlah_pemesanan}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
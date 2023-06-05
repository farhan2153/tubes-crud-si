@extends('layouts.master')
@section('content')

        <form action="/pemesanankeretaapi" method="POST" class="">
            @csrf
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
                <label for="id_tiket_kereta" class="form-label">ID Tiket Kereta Api</label>
                <select class="form-control select2" style="width: 100%;" name="id_tiket_kereta" id="id_tiket_kereta">
                    <option disabled value>Pilih ID Tiket Kereta Api</option>
                    @foreach ($tiketkeretaapi_ as $item)
                        <option value="{{ $item->id }}">{{ $item->id }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_pemesanan" class="form-label">Jumlah Pemesanan</label>
                <input type="text" class="form-control" id="jumlah_pemesanan" name="jumlah_pemesanan" placeholder="Masukan Jumlah Pemesanan">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('pemesanankeretaapi.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
@extends('layouts.master')
@section('content')

        <form action="/tiketkeretaapi" method="POST" class="">
            @csrf
            <div class="form-group">
            <div class="form-group">
                <label for="id_kereta" class="form-label">Nama Kereta Api</label>
                <select class="form-control select2" style="width: 100%;" name="id_kereta" id="id_kereta">
                    <option disabled value>Pilih Nama Kereta Api</option>
                    @foreach ($kereta_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kereta }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_jadwal" class="form-label">Tanggal Berangkat</label>
                <select class="form-control select2" style="width: 100%;" name="id_jadwal" id="id_jadwal">
                    <option disabled value>Pilih Tanggal Berangkat</option>
                    @foreach ($jadwal_ as $item)
                        <option value="{{ $item->id }}">{{ $item->tanggal_berangkat }}></option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="id_kota" class="form-label">Nama Kota</label>
                <select class="form-control select2" style="width: 100%;" name="id_kota" id="id_kota">
                    <option disabled value>Pilih Nama Kota</option>
                    @foreach ($kota_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kota_asal }}></option>
                    @endforeach
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('kereta.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
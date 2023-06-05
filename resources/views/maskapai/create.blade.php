@extends('layouts.master')
@section('content')

        <form action="/maskapai" method="POST" class="">
            @csrf
            <div class="form-group">
            <div class="mb-3">
                <label for="nama_pesawat" class="form-label">Nama Maskapai Pesawat</label>
                <input type="text" class="form-control" id="nama_pesawat" name="nama_pesawat" placeholder="Masukan Nama Maskapai Pesawat">
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
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('maskapai.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
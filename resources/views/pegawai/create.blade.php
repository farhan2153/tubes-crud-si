@extends('layouts.master')
@section('content')

        <form action="/pegawai" method="POST" class="">
            @csrf
            <div class="form-group">
            {{-- <div class="mb-3">
                <label for="id_user" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukan Nama Pengguna">
            </div> --}}
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan Nama Pegawai">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
            </div>
            <div class="mb-3">
                <label for="notelp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukan Nomor Telepon">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Jabatan">
            </div>
            <div class="mb-3">
                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="Masukan Nomor Telepon">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
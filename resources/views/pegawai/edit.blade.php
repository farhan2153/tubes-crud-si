@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Pegawai</h4>
        <form action="/pegawai/update/{{$pegawai->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            {{-- <div class="form-group">
                <label for="id_user" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukkan Nama User" value="{{$pegawai->id_user}}">
            </div> --}}
            <div class="form-group">
                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" value="{{$pegawai->nama_pegawai}}">
            </div>
            <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{$pegawai->alamat}}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" value="{{$pegawai->jenis_kelamin}}">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{$pegawai->tanggal_lahir}}">
            </div>
            <div class="form-group">
                <label for="notelp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukkan Nomor Telepon" value="{{$pegawai->notelp}}">
            </div>
            <div class="form-group">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="{{$pegawai->jabatan}}">
            </div>
            <div class="form-group">
                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="Masukkan Tanggal Masuk" value="{{$pegawai->tanggal_masuk}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
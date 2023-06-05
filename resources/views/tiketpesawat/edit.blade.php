@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Kereta Api</h4>
        <form action="/tiketpesawat/update/{{$tiketpesawat->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_maskapai" class="form-label">Nama Pesawat</label>
                <select class="form-control select2" style="width: 100%;" name="id_maskapai" id="id_maskapai">
                    <option disabled value>Pilih Nama Pesawat</option>
                    @foreach ($maskapai_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_pesawat }}></option>
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
            <div class="form-group">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" value="{{$tiketpesawat->harga}}">
            </div>
            <div class="form-group">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Nama Pegawai" value="{{$tiketpesawat->kelas}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
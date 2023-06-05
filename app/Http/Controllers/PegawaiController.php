<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::paginate(100);

        return view('pegawai.index', [
            'pegawai' => $pegawai,
        ]);
    }
    public function addView()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $data = [
            // 'id_user' => $request->input('id_user'),
            'nama_pegawai' => $request->input('nama_pegawai'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'notelp' => $request->input('notelp'),
            'jabatan' => $request->input('jabatan'),
            'tanggal_masuk' => $request->input('tanggal_masuk'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Pegawai::create($data);

        return redirect()->route('pegawai.index');
    }
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        // $pegawai->id_user = $request->id_user;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->notelp = $request->notelp;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->tanggal_masuk = $request->tanggal_masuk;
        $pegawai->save();

        return redirect('/pegawai');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }



}

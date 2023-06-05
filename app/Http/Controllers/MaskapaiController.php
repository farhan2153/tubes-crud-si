<?php

namespace App\Http\Controllers;
use App\Models\Maskapai;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MaskapaiController extends Controller
{
    public function index()
    {
        $maskapai = Maskapai::with('RPegawai')->paginate(5);

        return view('maskapai.index', [
            'maskapai' => $maskapai,
        ]);
    }
    public function addView()
    {
        $pegawai_ = Pegawai::all();
        return view('maskapai.create', compact('pegawai_'));
    }
    public function store(Request $request)
    {
        $data = [
            'nama_pesawat' => $request->input('nama_pesawat'),
            'id_pegawai' => $request->input('id_pegawai'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Maskapai::create($data);

        return redirect()->route('maskapai.index');
    }
    public function edit($id)
    {
        $pegawai_ = Pegawai::all();
        $maskapai = Maskapai::findOrFail($id);
        return view('maskapai.edit', compact('maskapai', 'pegawai_'));
    }

    public function update(Request $request, $id)
    {
        $maskapai = Maskapai::findOrFail($id);
        $maskapai->nama_pesawat = $request->nama_pesawat;
        $maskapai->id_pegawai = $request->id_pegawai;
        $maskapai->save();
        return redirect('/maskapai');
    }

    public function destroy($id)
    {
        $maskapai = Maskapai::findOrFail($id);
        $maskapai->delete();
        return redirect('/maskapai');
    }
}

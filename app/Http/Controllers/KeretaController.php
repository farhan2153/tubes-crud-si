<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KeretaController extends Controller
{
    public function index()
    {
        $kereta = Kereta::with('RPegawai')->paginate(5);

        return view('kereta.index', [
            'kereta' => $kereta,
        ]);
    }
    public function addView()
    {
        $pegawai_ = Pegawai::all();
        return view('kereta.create', compact('pegawai_'));
    }
    public function store(Request $request)
    {
        $data = [
            'nama_kereta' => $request->input('nama_kereta'),
            'id_pegawai' => $request->input('id_pegawai'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Kereta::create($data);

        return redirect()->route('kereta.index');
    }
    public function edit($id)
    {
        $pegawai_ = Pegawai::all();
        $kereta = Kereta::findOrFail($id);
        return view('kereta.edit', compact('kereta', 'pegawai_'));
    }

    public function update(Request $request, $id)
    {
        $kereta = Kereta::findOrFail($id);
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->id_pegawai = $request->id_pegawai;
        $kereta->save();
        return redirect('/kereta');
    }

    public function destroy($id)
    {
        $kereta = Kereta::findOrFail($id);
        $kereta->delete();
        return redirect('/kereta');
    }
}

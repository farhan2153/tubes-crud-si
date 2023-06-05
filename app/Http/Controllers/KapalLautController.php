<?php

namespace App\Http\Controllers;
use App\Models\KapalLaut;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KapalLautController extends Controller
{
    public function index()
    {
        $kapallaut = KapalLaut::with('RPegawai')->paginate(5);

        return view('kapallaut.index', [
            'kapallaut' => $kapallaut,
        ]);
    }
    public function addView()
    {
        $pegawai_ = Pegawai::all();
        return view('kapallaut.create', compact('pegawai_'));
    }
    public function store(Request $request)
    {
        $data = [
            'nama_kapal' => $request->input('nama_kapal'),
            'id_pegawai' => $request->input('id_pegawai'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        KapalLaut::create($data);

        return redirect()->route('kapallaut.index');
    }
    public function edit($id)
    {
        $pegawai_ = Pegawai::all();
        $kapallaut = KapalLaut::findOrFail($id);
        return view('kapallaut.edit', compact('kapallaut', 'pegawai_'));
    }

    public function update(Request $request, $id)
    {
        $kapallaut = KapalLaut::findOrFail($id);
        $kapallaut->nama_kapal = $request->nama_kapal;
        $kapallaut->id_pegawai = $request->id_pegawai;
        $kapallaut->save();
        return redirect('/kapallaut');
    }

    public function destroy($id)
    {
        $kapallaut = KapalLaut::findOrFail($id);
        $kapallaut->delete();
        return redirect('/kapallaut');
    }
}

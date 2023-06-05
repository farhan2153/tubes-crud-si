<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\KapalLaut;
use App\Models\TiketKapal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TiketKapalController extends Controller
{
    public function index()
    {
        $tiketkapal = TiketKapal::with('RKapalLaut', 'RJadwal')->paginate(5);

        return view('tiketkapal.index', [
            'tiketkapal' => $tiketkapal,
        ]);
    }
    public function addView()
    {
        $kapallaut_ = KapalLaut::all();
        $jadwal_ = Jadwal::all();
        return view('tiketkapal.create', compact('kapallaut_', 'jadwal_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_kapal' => $request->input('id_kapal'),
            'id_jadwal' => $request->input('id_jadwal'),
            'harga' => $request->input('harga'),
            'kelas' => $request->input('kelas'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        TiketKapal::create($data);

        return redirect()->route('tiketkapal.index');
    }
    public function edit($id)
    {
        $kapallaut_ = KapalLaut::all();
        $jadwal_ = Jadwal::all();
        $tiketkapal = TiketKapal::findOrFail($id);
        return view('tiketkapal.edit', compact('tiketkapal', 'kapallaut_', 'jadwal_'));
    }

    public function update(Request $request, $id)
    {
        $tiketkapal = TiketKapal::findOrFail($id);
        $tiketkapal->id_kapal = $request->id_kapal;
        $tiketkapal->id_jadwal = $request->id_jadwal;
        $tiketkapal->harga = $request->harga;
        $tiketkapal->kelas = $request->kelas;
        $tiketkapal->save();
        return redirect('/tiketkapal');
    }

    public function destroy($id)
    {
        $tiketkapal = TiketKapal::findOrFail($id);
        $tiketkapal->delete();
        return redirect('/tiketkapal');
    }
}

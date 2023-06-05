<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Maskapai;
use App\Models\TiketPesawat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TiketPesawatController extends Controller
{
    public function index()
    {
        $tiketpesawat = TiketPesawat::with('RMaskapai', 'RJadwal')->paginate(5);

        return view('tiketpesawat.index', [
            'tiketpesawat' => $tiketpesawat,
        ]);
    }
    public function addView()
    {
        $maskapai_ = Maskapai::all();
        $jadwal_ = Jadwal::all();
        return view('tiketpesawat.create', compact('maskapai_', 'jadwal_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_maskapai' => $request->input('id_maskapai'),
            'id_jadwal' => $request->input('id_jadwal'),
            'harga' => $request->input('harga'),
            'kelas' => $request->input('kelas'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        TiketPesawat::create($data);

        return redirect()->route('tiketpesawat.index');
    }
    public function edit($id)
    {
        $maskapai_ = Maskapai::all();
        $jadwal_ = Jadwal::all();
        $tiketpesawat = TiketPesawat::findOrFail($id);
        return view('tiketpesawat.edit', compact('tiketpesawat', 'maskapai_', 'jadwal_'));
    }

    public function update(Request $request, $id)
    {
        $tiketpesawat = TiketPesawat::findOrFail($id);
        $tiketpesawat->id_maskapai = $request->id_maskapai;
        $tiketpesawat->id_jadwal = $request->id_jadwal;
        $tiketpesawat->harga = $request->harga;
        $tiketpesawat->kelas = $request->kelas;
        $tiketpesawat->save();
        return redirect('/tiketpesawat');
    }

    public function destroy($id)
    {
        $tiketpesawat = TiketPesawat::findOrFail($id);
        $tiketpesawat->delete();
        return redirect('/tiketpesawat');
    }
}

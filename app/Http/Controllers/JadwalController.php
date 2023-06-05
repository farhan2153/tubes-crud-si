<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Kota;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::with('RKota')->paginate(5);

        return view('jadwal.index', [
            'jadwal' => $jadwal,
        ]);
    }
    public function addView()
    {
        $kota_ = Kota::all();
        return view('jadwal.create', compact('kota_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_kota' => $request->input('id_kota'),
            'tanggal_berangkat' => $request->input('tanggal_berangkat'),
            'tanggal_pesan' => $request->input('tanggal_pesan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Jadwal::create($data);

        return redirect()->route('jadwal.index');
    }
    public function edit($id)
    {
        $kota_ = Kota::all();
        $jadwal = jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal', 'kota_'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->id_kota = $request->id_kota;
        $jadwal->tanggal_berangkat = $request->tanggal_berangkat;
        $jadwal->tanggal_pesan = $request->tanggal_pesan;
        $jadwal->save();
        return redirect('/jadwal');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }
}

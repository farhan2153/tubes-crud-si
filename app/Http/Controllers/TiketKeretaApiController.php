<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kereta;
use App\Models\Kota;
use App\Models\TiketKeretaApi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TiketKeretaApiController extends Controller
{
    public function index()
    {
        $tiketkeretaapi = TiketKeretaApi::with('RKereta', 'RJadwal')->paginate(5);

        return view('tiketkeretaapi.index', [
            'tiketkeretaapi' => $tiketkeretaapi,
        ]);
    }
    public function addView()
    {
        $kereta_ = Kereta::all();
        $jadwal_ = Jadwal::all();
        // $kota_ = Kota::all();
        return view('tiketkeretaapi.create', compact('kereta_', 'jadwal_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_kereta' => $request->input('id_kereta'),
            'id_jadwal' => $request->input('id_jadwal'),
            // 'id_kota' => $request->input('id_kota'),
            'harga' => $request->input('harga'),
            'kelas' => $request->input('kelas'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        TiketKeretaApi::create($data);

        return redirect()->route('tiketkeretaapi.index');
    }
    public function edit($id)
    {
        $kereta_ = Kereta::all();
        $jadwal_ = Jadwal::all();
        // $kota_ = Kota::all();
        $tiketkeretaapi = TiketKeretaApi::findOrFail($id);
        return view('tiketkeretaapi.edit', compact('tiketkeretaapi', 'kereta_', 'jadwal_'));
    }

    public function update(Request $request, $id)
    {
        $tiketkeretaapi = TiketKeretaApi::findOrFail($id);
        $tiketkeretaapi->id_kereta = $request->id_kereta;
        $tiketkeretaapi->id_jadwal = $request->id_jadwal;
        // $tiketkeretaapi->id_kota = $request->id_kota;
        $tiketkeretaapi->harga = $request->harga;
        $tiketkeretaapi->kelas = $request->kelas;
        $tiketkeretaapi->save();
        return redirect('/tiketkeretaapi');
    }

    public function destroy($id)
    {
        $tiketkeretaapi = tiketkeretaapi::findOrFail($id);
        $tiketkeretaapi->delete();
        return redirect('/tiketkeretaapi');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::paginate(5);

        return view('kota.index', [
            'kota' => $kota,
        ]);
    }
    public function addView()
    {
        return view('kota.create');
    }
    public function store(Request $request)
    {
        $data = [
            'nama_kota_asal' => $request->input('nama_kota_asal'),
            'nama_kota_tujuan' => $request->input('nama_kota_tujuan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Kota::create($data);

        return redirect()->route('kota.index');
    }
    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        return view('kota.edit', compact('kota'));
    }

    public function update(Request $request, $id)
    {
        $kota = Kota::findOrFail($id);
        $kota->nama_kota_asal = $request->nama_kota_asal;
        $kota->nama_kota_tujuan = $request->nama_kota_tujuan;
        $kota->save();
        return redirect('/kota');
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect('/kota');
    }
}

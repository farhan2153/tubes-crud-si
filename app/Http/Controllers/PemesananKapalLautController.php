<?php

namespace App\Http\Controllers;

use App\Models\PemesananKapalLaut;
use App\Models\TiketKapal;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PemesananKapalLautController extends Controller
{
    public function index()
    {
        $pemesanankapallaut = PemesananKapalLaut::with('RTiketKapalLaut', 'RUser')->paginate(5);
        return view('pemesanankapallaut.index', [
            'pemesanankapallaut' => $pemesanankapallaut,
        ]);
    }
    public function addView()
    {
        $tiketkapallaut_ = TiketKapal::all();
        $pengguna_ = User::all();
        return view('pemesanankapallaut.create', compact('tiketkapallaut_', 'pengguna_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_user' => $request->input('id_user'),
            'id_tiket_kapal' => $request->input('id_tiket_kapal'),
            'jumlah_pemesanan' => $request->input('jumlah_pemesanan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        PemesananKapalLaut::create($data);

        return redirect()->route('pemesanankapallaut.index');
    }
    public function edit($id)
    {
        $tiketkapallaut_ = TiketKapal::all();
        $pengguna_ = User::all();
        $pemesanankapallaut = PemesananKapalLaut::findOrFail($id);
        return view('pemesanankapallaut.edit', compact('pemesanankapallaut', 'tiketkapallaut_', 'pengguna_s'));
    }

    public function update(Request $request, $id)
    {
        $pemesanankapallaut = PemesananKapalLaut::findOrFail($id);
        $pemesanankapallaut->id_user = $request->id_user;
        $pemesanankapallaut->id_tiket_kapal = $request->id_tiket_kapal;
        $pemesanankapallaut->jumlah_pemesanan = $request->jumlah_pemesanan;
        $pemesanankapallaut->save();
        return redirect('/pemesanankapallaut');
    }

    public function destroy($id)
    {
        $pemesanankapallaut = PemesananKapalLaut::findOrFail($id);
        $pemesanankapallaut->delete();
        return redirect('/pemesanankapallaut');
    }
}

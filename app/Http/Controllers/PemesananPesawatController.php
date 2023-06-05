<?php

namespace App\Http\Controllers;

use App\Models\PemesananPesawat;
use App\Models\TiketPesawat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PemesananPesawatController extends Controller
{
    public function index()
    {
        $pemesananpesawat = PemesananPesawat::with('RTiketPesawat', 'RUser')->paginate(5);

        return view('pemesananpesawat.index', [
            'pemesananpesawat' => $pemesananpesawat,
        ]);
    }
    public function addView()
    {
        $tiketpesawat_ = TiketPesawat::all();
        $pengguna_ = User::all();
        return view('pemesananpesawat.create', compact('tiketpesawat_', 'pengguna_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_user' => $request->input('id_user'),
            'id_tiket_pesawat' => $request->input('id_tiket_pesawat'),
            'jumlah_pemesanan' => $request->input('jumlah_pemesanan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        PemesananPesawat::create($data);

        return redirect()->route('pemesananpesawat.index');
    }
    public function edit($id)
    {
        $tiketpesawat_ = TiketPesawat::all();
        $pengguna_ = User::all();
        $pemesananpesawat = PemesananPesawat::findOrFail($id);
        return view('pemesananpesawat.edit', compact('pemesananpesawat', 'tiketpesawat_', 'pengguna_'));
    }

    public function update(Request $request, $id)
    {
        $pemesananpesawat = PemesananPesawat::findOrFail($id);
        $pemesananpesawat->id_user = $request->id_user;
        $pemesananpesawat->id_tiket_pesawat = $request->id_tiket_pesawat;
        $pemesananpesawat->jumlah_pemesanan = $request->jumlah_pemesanan;
        $pemesananpesawat->save();
        return redirect('/pemesananpesawat');
    }

    public function destroy($id)
    {
        $pemesananpesawat = PemesananPesawat::findOrFail($id);
        $pemesananpesawat->delete();
        return redirect('/pemesananpesawat');
    }
}

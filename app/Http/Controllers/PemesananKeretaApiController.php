<?php

namespace App\Http\Controllers;

use App\Models\PemesananKeretaApi;
use App\Models\TiketKeretaApi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PemesananKeretaApiController extends Controller
{
    public function index()
    {
        $pemesanankeretaapi = PemesananKeretaApi::with('RTiketKeretaApi', 'RUser')->paginate(5);
        return view('pemesanankeretaapi.index', [
            'pemesanankeretaapi' => $pemesanankeretaapi,
        ]);
    }
    public function addView()
    {
        $tiketkeretaapi_ = TiketKeretaApi::all();
        $pengguna_ = User::all();
        return view('pemesanankeretaapi.create', compact('tiketkeretaapi_', 'pengguna_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_user' => $request->input('id_user'),
            'id_tiket_kereta' => $request->input('id_tiket_kereta'),
            'jumlah_pemesanan' => $request->input('jumlah_pemesanan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        PemesananKeretaApi::create($data);

        return redirect()->route('pemesanankeretaapi.index');
    }
    public function edit($id)
    {
        $tiketkeretaapi_ = TiketKeretaApi::all();
        $pengguna_ = User::all();
        $pemesanankeretaapi = PemesananKeretaApi::findOrFail($id);
        return view('pemesanankeretaapi.edit', compact('pemesanankeretaapi', 'tiketkeretaapi_', 'pengguna_'));
    }

    public function update(Request $request, $id)
    {
        $pemesanankeretaapi = PemesananKeretaApi::findOrFail($id);
        $pemesanankeretaapi->id_user = $request->id_user;
        $pemesanankeretaapi->id_tiket_kereta = $request->id_tiket_kereta;
        $pemesanankeretaapi->jumlah_pemesanan = $request->jumlah_pemesanan;
        $pemesanankeretaapi->save();
        return redirect('/pemesanankeretaapi');
    }

    public function destroy($id)
    {
        $pemesanankeretaapi = PemesananKeretaApi::findOrFail($id);
        $pemesanankeretaapi->delete();
        return redirect('/pemesanankeretaapi');
    }
}

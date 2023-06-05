<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::paginate(5);

        return view('pengguna.index', [
            'pengguna' => $pengguna,
        ]);
    }
    public function addView()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        User::create($data);

        return redirect()->route('pengguna.index');
    }
    public function edit($id)
    {
        $pengguna = User::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = User::findOrFail($id);
        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->save();

        return redirect('/pengguna');
    }

    public function destroy($id)
    {
        $pengguna = User::findOrFail($id);
        $pengguna->delete();
        return redirect('/pengguna');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    public function komen()
    {
        $komen = Komen::all();
        return view('user.wisata.anyer', ['komen' => $komen ]);
    }
    public function insertkomen(Request $request)
    {
        $data = Komen::create([
            'nama' => $request->nama,
            'foto' => $request->foto,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotokomen/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return redirect()->route('komen')->with('success', 'Data Behasil Ditambahkan!');
        }
    }
}

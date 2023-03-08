<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    public function komenlembang()
    {
        $komen = Komen::all();
        return view('user.wisata.lembang',['komen'=> $komen]);
    }
    public function komenanyer()
    {
        $komen = Komen::all();
        return view('user.wisata.anyer',['komen'=> $komen]);
        
    }
    public function komenayana()
    {
        $komen = Komen::all();
        return view('user.wisata.ayana',['komen'=> $komen]);
        
    }
    public function komenjatim()
    {
        $komen = Komen::all();
        return view('user.wisata.jatim',['komen'=> $komen]);
        
    }
    public function komenkawah()
    {
        $komen = Komen::all();
        return view('user.wisata.kawah',['komen'=> $komen]);
        
    }
    public function komenkya()
    {
        $komen = Komen::all();
        return view('user.wisata.kya',['komen'=> $komen]);
        
    }
    public function komenlawang()
    {
        $komen = Komen::all();
        return view('user.wisata.lawang',['komen'=> $komen]);
        
    }
    public function komenmuseum()
    {
        $komen = Komen::all();
        return view('user.wisata.museumangkut',['komen'=> $komen]);
        
    }
    public function komenpandawa()
    {
        $komen = Komen::all();
        return view('user.wisata.pandawa',['komen'=> $komen]);
        
    }
    public function komenpanglipuran()
    {
        $komen = Komen::all();
        return view('user.wisata.panglipuran',['komen'=> $komen]);
        
    }
    public function komenpeuncang()
    {
        $komen = Komen::all();
        return view('user.wisata.peuncang',['komen'=> $komen]);
        
    }
    public function komensanterra()
    {
        $komen = Komen::all();
        return view('user.wisata.santerra',['komen'=> $komen]);
        
    }
    public function komentanahlot()
    {
        $komen = Komen::all();
        return view('user.wisata.tanahlot',['komen'=> $komen]);
        
    }

    public function insertkomen(Request $request)
    {
        $data = Komen::create([
            // 'komentar_id' => $request->komentar_id,
            'nama' => $request->nama,
            'foto' => $request->foto,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotokomen/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return back()->with('success', 'Data Behasil Ditambahkan!');
        }
    }
}

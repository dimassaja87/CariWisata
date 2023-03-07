<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index3()
    {
        $data = kontak::all();
        return view('user.contactus',compact('data'));
    }

    public function insertkontak(Request $request)
    {
        kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);
        return view ('user.contactus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function pengguna()
    {
        $data = Pengguna::all();
        return view('admin.listtable.datauser', compact('data'));
    }

    public function insertpengguna(Request $request)
    {
        Pengguna::create($request->all());
        return redirect()->route('pengguna');

        $data = Pengguna::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopengguna/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
    }
}
}

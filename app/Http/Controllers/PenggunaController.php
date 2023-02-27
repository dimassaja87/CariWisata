<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PenggunaController extends Controller
{
    public function pengguna()
    {
        $data = Pengguna::all();
        return view('admin.tabeluser.datauser', compact('data'));
    }

    public function tambahpengguna()
    {
        $data = Pengguna::all();
        return view('admin.tabeluser.tambahuser', compact('data'));
    }

    public function insertpengguna(Request $request)
    {
        $data = Pengguna::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopengguna/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return redirect()->route('pengguna');
        }
    }

    public function tampilpengguna($id)
    {
        $data = Pengguna::find($id);
        return view('admin.tabeluser.tampiluser', compact('data'));
    }

    public function updatepengguna(Request $request, $id)
    {
        $data = Pengguna::find($id);
        $data->update($request->all());
        return redirect()->route('pengguna');
    }

    public function deletepengguna($id)
    {
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('pengguna');
    }
}

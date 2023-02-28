<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function datadestinasi()
    {
        $data = Destinasi::all();
        return view('admin.tabeldestinasi.datadestinasi', compact('data'));
    }

    public function tambahdestinasi()
    {
        $data = Destinasi::all();
        return view('admin.tabeldestinasi.tambahdestinasi', compact('data'));
    }

    public function insertdestinasi(Request $request)
    {
        $data = Destinasi::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotodestinasi/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

            return redirect()->route('datadestinasi');
        }
    }

    public function tampildestinasi($id)
    {
        $data = Destinasi::find($id);
        return view('admin.tabeldestinasi.tampildestinasi', compact('data'));
    }

    public function updatedestinasi(Request $request, $id)
    {
        $data = Destinasi::find($id);
        $data->update($request->all());
        return redirect()->route('datadestinasi');
    }

    public function deletedestinasi($id)
    {
        $data = Destinasi::find($id);
        $data->delete();
        return redirect()->route('datadestinasi');
    }
}

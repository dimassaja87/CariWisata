<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kota;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DestinasiController extends Controller
{
    public function datadestinasi()
    {
        $data = Destinasi::paginate(5);
        return view('admin.tabeldestinasi.datadestinasi', compact('data'));
    }

    public function tambahdestinasi()
    {
        $data = Destinasi::all();
        $kota = Kota::all();
        $rating = Rating::all();

        return view('admin.tabeldestinasi.tambahdestinasi', compact('data', 'kota', 'rating'));
    }

    public function insertdestinasi(Request $request)
    {
        $data = Destinasi::create($request->all());
        if ($request->hasFile('foto_wisata')) {
            $request->file('foto_wisata')->move('fotowisata/', $request->file('foto_wisata')->getClientOriginalName());
            $data->foto_wisata = $request->file('foto_wisata')->getClientOriginalName();
            $data->save();

            return redirect()->route('datadestinasi')->with('success', 'Data Behasil Ditambahkan!');
        }
    }

    public function tampildestinasi($id)
    {
        $data = Destinasi::find($id);
        $kota = Kota::all();
        $rating = Rating::all();
        return view('admin.tabeldestinasi.tampildestinasi', compact('data', 'kota', 'rating'));
    }

    public function updatedestinasi(Request $request, $id)
    {
        $data = Destinasi::find($id);
        $data->update($request->all());

        if ($request->hasFile('foto_wisata'))
        {
            $destination = 'fotowisata/'.$data->foto_sampul;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('foto_wisata')->move('fotowisata/', $request->file('foto_wisata')->getClientOriginalName());
            $data->foto_wisata = $request->file('foto_wisata')->getClientOriginalName();
            $data->update();
        }

        return redirect()->route('datadestinasi')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletedestinasi($id)
    {
        $data = Destinasi::find($id);
        $data->delete();
        return redirect()->route('datadestinasi')->with('success', 'Data Behasil Di Hapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kota;
use App\Models\KotaDetail;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DestinasiController extends Controller
{
    public function destinasi()
    {
        $Kota = KotaDetail::all();
        return view('welcome',compact('Kota'));
    }
    public function datadestinasi()
    {
        $data = Destinasi::paginate(5);
        return view('admin.tabeldestinasi.datadestinasi', compact('data'));
    }

    public function tambahdestinasi()
    {
        $data = Destinasi::all();
        // $kota = Kota::all();
        $rating = Rating::all();

        return view('admin.tabeldestinasi.tambahdestinasi', compact('data', 'rating'));
    }

    public function insertdestinasi(Request $request)
    {
        $data = Destinasi::create([
            'nama_wisata' =>$request->nama_wisata,
            'lokasi' =>$request->lokasi,
            'id_kota' =>$request->id_kota,
            'htm' =>$request->htm,
            'foto_wisata' =>$request->foto_wisata,
            'deskripsi' =>$request->deskripsi,
            'status' =>'menunggu persetujuan',

        ]);
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
        // $kota = Kota::all();
        $rating = Rating::all();
        return view('admin.tabeldestinasi.tampildestinasi', compact('data', 'rating'));
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

    public function search(Request $request)
	{
		if($request->has('search')){
            $search=$request->search;
            $data = Kota::where('nama_wisata','LIKE','%' . $search .'%')->paginate(5);
        }else{
            $data = Kota::paginate(5);
        }
        return view('user.kota.bali', compact('data'));
	}
}

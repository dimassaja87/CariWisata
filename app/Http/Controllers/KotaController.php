<?php

namespace App\Http\Controllers;

use view;
use App\Models\Destinasi;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KotaController extends Controller
{
    public function kota(Request $request)
    {

        if ($request->has('search')) {
            $data = Kota::where('nama', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Kota::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelkota.datakota', compact('data'));
    }

    public function tambahkota()
    {
        $data = Kota::all();
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        return view('admin.tabelkota.tambahkota', compact('data', 'destinasi'));
    }

    public function insertkota(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Kota::create($request->all());
        // if ($request->hasFile('foto')) {
        //     $request->file('foto')->move('fotoKota/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        return redirect()->route('kota')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilkota($id)
    {
        $data = Kota::find($id);
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelkota.tampilkota', compact('data', 'destinasi'));
    }

    public function updatekota(Request $request, $id)
    {
        $data = Kota::find($id);
        $data->update([
            'nama_kota' => $request->nama_kota,
        ]);

        return redirect()->route('kota')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletekota($id)
    {
        $data = Kota::find($id);
        $data->delete();
        return redirect()->route('kota')->with('success', 'Data Behasil Di Hapus!');
    }

    public function search(Request $request){
        if($request->has('search')) {
            $kota = Kota::where('nama','LIKE','%'.$request->search. '%')->get();
        }else{
            $kota = Kota::all();
        }
        return view('user.kota.bali',['kota' => $kota]);
    }
}

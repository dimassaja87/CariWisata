<?php

namespace App\Http\Controllers;

use view;
use App\Models\Destinasi;
use App\Models\Kota;
use App\Models\KotaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Toastr;

class KotaController extends Controller
{
    public function kota(Request $request)
    {

        if ($request->has('search')) {
            $data = Kota::where('nama_kota', 'LIKE', '%' . $request->search)->paginate(5);
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
        $kotadetail = KotaDetail::all();
        return view('admin.tabelkota.tambahkota', compact('data', 'destinasi', 'kotadetail'));
    }

    public function insertkota(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Kota::create($request->all());
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotosampul/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kota')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilkota($id)
    {
        $data = Kota::find($id);
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        $kotadetail = KotaDetail::all();
        // dd($data);

        return view('admin.tabelkota.tampilkota', compact('data', 'destinasi', 'kotadetail'));
    }

    public function updatekota(Request $request, $id)
    {
        $data = Kota::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto_sampul'))
        {
            $destination = 'fotosampul/'.$data->foto_sampul;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('foto_sampul')->move('fotosampul/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->update();
        }

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

    //Multiple Delete
    public function multidelete()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\Kota::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }


}

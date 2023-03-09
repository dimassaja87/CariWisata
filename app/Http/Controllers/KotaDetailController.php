<?php

namespace App\Http\Controllers;

use App\Models\KotaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class KotaDetailController extends Controller
{
    public function kotadetail(Request $request)
    {

        if ($request->has('search')) {
            $data = KotaDetail::where('nama_kota', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = KotaDetail::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelkota.datakotadetail', compact('data'));
    }

    public function tambahkotadetail()
    {
        $data = KotaDetail::all();
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        return view('admin.tabelkota.tambahkotadetail', compact('data'));
    }

    public function insertkotadetail(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = KotaDetail::create($request->all());
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotosampul/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kotadetail')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilkotadetail($id)
    {
        $data = KotaDetail::find($id);
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelkota.tampilkotadetail', compact('data'));
    }

    public function updatekotadetail(Request $request, $id)
    {
        $data = KotaDetail::find($id);
        $data->update([
            'nama_kota' => $request->nama_kota,
        ]);
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

        return redirect()->route('kotadetail')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletekotadetail($id)
    {
        $data = KotaDetail::find($id);
        $data->delete();
        return redirect()->route('kotadetail')->with('success', 'Data Behasil Di Hapus!');
    }

    public function search(Request $request){
        if($request->has('search')) {
            $kota = KotaDetail::where('nama','LIKE','%'.$request->search. '%')->get();
        }else{
            $kota = KotaDetail::all();
        }
        return view('user.kota.bali',['kota' => $kota]);
    }

    //Multiple Delete
    public function multidelete()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\KotaDetail::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }
}

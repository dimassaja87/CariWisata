<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class GaleryController extends Controller
{
    public function Galery(Request $request)
    {

        if ($request->has('search')) {
            $data = Galery::where('nama_Galery', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Galery::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelGalery.dataGalery', compact('data'));
    }

    public function tambahGalery()
    {
        $data = Galery::all();
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        return view('admin.tabelGalery.tambahGalery', compact('data', 'destinasi'));
    }

    public function insertGalery(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Galery::create($request->all());
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('fotosampul/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('Galery')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilGalery($id)
    {
        $data = Galery::find($id);
        // $jurusan = Jurusan::all();
        $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelGalery.tampilGalery', compact('data', 'destinasi'));
    }

    public function updateGalery(Request $request, $id)
    {
        $data = Galery::find($id);
        $data->update([
            'nama_Galery' => $request->nama_Galery,
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

        return redirect()->route('Galery')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deleteGalery($id)
    {
        $data = Galery::find($id);
        $data->delete();
        return redirect()->route('Galery')->with('success', 'Data Behasil Di Hapus!');
    }

    public function search(Request $request){
        if($request->has('search')) {
            $Galery = Galery::where('nama','LIKE','%'.$request->search. '%')->get();
        }else{
            $Galery = Galery::all();
        }
        return view('user.Galery.bali',['Galery' => $Galery]);
    }

    //Multiple Delete
    public function multidelete()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\Galery::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }
}

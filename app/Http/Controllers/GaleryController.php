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
    public function galery(Request $request)
    {

        if ($request->has('search')) {
            $data = Galery::where('nama_Galery', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Galery::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelgalery.datagalery', compact('data'));
    }

    public function tambahgalery()
    {
        $data = Galery::all();
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        return view('admin.tabelgalery.tambahgalery', compact('data'));
    }

    public function insertgalery(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Galery::create($request->all());
        if ($request->hasFile('fotogalery')) {
            $request->file('fotogalery')->move('foto/fotogalery/', $request->file('fotogalery')->getClientOriginalName());
            $data->fotogalery = $request->file('fotogalery')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('galery')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilGalery($id)
    {
        $data = Galery::find($id);
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelgalery.tampilgalery', compact('data'));
    }

    public function updategalery(Request $request, $id)
    {
        $data = Galery::find($id);
        $data->update('all');
        if ($request->hasFile('fotogalery'))
        {
            $destination = 'foto/fotogalery/'.$data->fotogalery;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('fotogalery')->move('foto/fotogalery/', $request->file('fotogalery')->getClientOriginalName());
            $data->fotogalery = $request->file('fotogalery')->getClientOriginalName();
            $data->update();
        }

        return redirect()->route('galery')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletegalery($id)
    {
        $data = Galery::find($id);
        $data->delete();
        return redirect()->route('galery')->with('success', 'Data Behasil Di Hapus!');
    }

    public function search(Request $request){
        if($request->has('search')) {
            $galery = Galery::where('nama','LIKE','%'.$request->search. '%')->get();
        }else{
            $galery = Galery::all();
        }
        return view('user.galery.bali',['galery' => $galery]);
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

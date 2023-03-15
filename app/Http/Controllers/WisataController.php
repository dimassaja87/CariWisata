<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\WisataDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class WisataController extends Controller
{
    public function datawisata(Request $request)
    {

        if ($request->has('search')) {
            $data = Wisata::where('judul_wisata', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = Wisata::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelwisata.datawisata', compact('data'));
    }

    public function tambahwisata()
    {
        $data = Wisata::all();
        $wisatadetail = WisataDetail::all();
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        return view('admin.tabelwisata.tambahwisata', compact('data', 'wisatadetail'));
    }

    public function insertwisata(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = Wisata::create($request->all());
        if ($request->hasFile('sampul_wisata')) {
            $request->file('sampul_wisata')->move('fotosampul/', $request->file('sampul_wisata')->getClientOriginalName());
            $data->sampul_wisata = $request->file('sampul_wisata')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datawisata')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampilwisata($id)
    {
        $data = Wisata::find($id);
        $wisatadetail = WisataDetail::all();
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelwisata.tampilwisata', compact('data', 'wisatadetail'));
    }

    public function updatewisata(Request $request, $id)
    {
        $data = Wisata::find($id);
        $data->update($request->all());
        if ($request->hasFile('sampul_wisata'))
        {
            $destination = 'fotosampul/'.$data->sampul_wisata;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('sampul_wisata')->move('fotosampul/', $request->file('sampul_wisata')->getClientOriginalName());
            $data->sampul_wisata = $request->file('sampul_wisata')->getClientOriginalName();
            $data->update();
        }

        return redirect()->route('datawisata')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletewisata($id)
    {
        $data = Wisata::find($id);
        $data->delete();
        return redirect()->route('datawisata')->with('success', 'Data Behasil Di Hapus!');
    }

    // public function search(Request $request){
    //     if($request->has('search')) {
    //         $wisata = Wisata::where('nama','LIKE','%'.$request->search. '%')->get();
    //     }else{
    //         $wisata = Wisata::all();
    //     }
    //     return view('user.wisata.bali',['wisata' => $wisata]);
    // }

    //Multiple Delete
    public function multidelete()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\Wisata::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\WisataDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class WisataDetailController extends Controller
{
    public function detailwisata(Request $request)
    {

        if ($request->has('search')) {
            $data = WisataDetail::where('detail_wisata', 'LIKE', '%' . $request->search)->paginate(5);
        } else {
            $data = WisataDetail::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }
        return view('admin.tabelwisata.datawisatadetail', compact('data'));
    }

    public function tambahdetailwisata()
    {
        $data = WisataDetail::all();
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        return view('admin.tabelwisata.tambahwisatadetail', compact('data'));
    }

    public function insertdetailwisata(Request $request)
    {
        // dd('aa');
        // $this->validate($request, [
        //     'nama' => 'required|min:5|max:30',
        // ]);
        // dd('bb');
        $data = WisataDetail::create($request->all());
        if ($request->hasFile('detail_wisata')) {
            $request->file('detail_wisata')->move('foto/detailwisata/', $request->file('detail_wisata')->getClientOriginalName());
            $data->detail_wisata = $request->file('detail_wisata')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('detailwisata')->with('success', 'Data Behasil Ditambahkan!');
    }

    public function tampildetailwisata($id)
    {
        $data = WisataDetail::find($id);
        // $jurusan = Jurusan::all();
        // $destinasi = Destinasi::all();
        // dd($data);

        return view('admin.tabelwisata.tampilwisatadetail', compact('data'));
    }

    public function updatedetailwisata(Request $request, $id)
    {
        $data = WisataDetail::find($id);
        $data->update('all');
        if ($request->hasFile('detail_wisata'))
        {
            $detailwisata = 'foto/detailwisata/'.$data->detail_wisata;
            if(File::exists($detailwisata))
            {
                File::delete($detailwisata);
            }
            $request->file('detail_wisata')->move('foto/detailwisata/', $request->file('detail_wisata')->getClientOriginalName());
            $data->detail_wisata = $request->file('detail_kota')->getClientOriginalName();
            $data->update();
        }

        return redirect()->route('detailwisata')->with('success', 'Data Behasil Di Ubah!');
    }

    public function deletedetailwisata($id)
    {
        $data = WisataDetail::find($id);
        $data->delete();
        return redirect()->route('detailwisata')->with('success', 'Data Behasil Di Hapus!');
    }

    public function search(Request $request){
        if($request->has('search')) {
            $kota = WisataDetail::where('nama','LIKE','%'.$request->search. '%')->get();
        }else{
            $kota = WisataDetail::all();
        }
        return view('user.kota.bali',['kota' => $kota]);
    }

    //Multiple Delete
    public function multidelete()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\WisataDetail::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\KotaDetail;
=======
use App\Models\Kota;
>>>>>>> parent of e4d68eb (pp)
=======
use App\Models\Kota;
>>>>>>> parent of def6c1f (Merge branch 'main' of https://github.com/dimassaja87/CariWisata)
use App\Models\Wisata;

class welcomecontroller extends Controller
{
     public function welcome(Request $request)
     {
<<<<<<< HEAD
<<<<<<< HEAD
        $data = kota::all();
=======
        $keyword = $request->keyword;
     //    dd($keyword);
        $data = kota::where('nama_kota','LIKE','%'.$keyword.'%')
                    ->get();
>>>>>>> parent of def6c1f (Merge branch 'main' of https://github.com/dimassaja87/CariWisata)
        $data1 = Wisata::all();
        $data2 = Galery::all();
            return view('welcome',compact('data','data1','data2'));
=======
          $keyword = $request->keyword;
          $data = kota::all();
          $data1 = Wisata::all();
          $data2 = Galery::all();
          return view('welcome',compact('data','data1','data2'));
>>>>>>> parent of e4d68eb (pp)
     }
}


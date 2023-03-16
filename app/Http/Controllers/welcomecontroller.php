<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\KotaDetail;
=======
use App\Models\Kota;
>>>>>>> parent of e4d68eb (pp)
use App\Models\Wisata;

class welcomecontroller extends Controller
{
     public function welcome(Request $request)
     {
<<<<<<< HEAD
        $data = kota::all();
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


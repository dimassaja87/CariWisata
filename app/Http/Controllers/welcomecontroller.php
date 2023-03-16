<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use App\Models\KotaDetail;
use App\Models\Wisata;

class welcomecontroller extends Controller
{
     public function welcome(Request $request)
     {
          $data = KotaDetail::all();
          $data1 = Wisata::all();
          $data2 = Galery::all();
          return view('welcome',compact('data','data1','data2'));
     }
     public function selengkapnya($id)
    {
        $data = KotaDetail::findorfail($id);
        return view('user.selengkapnya',compact('data'));
    }
}


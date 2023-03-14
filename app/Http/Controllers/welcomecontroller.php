<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Wisata;

class welcomecontroller extends Controller
{
     public function welcome()
     {
        $data = kota::all();
        $data1 = Wisata::all();
        $data2 = Galery::all();
            return view('welcome',compact('data','data1','data2'));
     }
}


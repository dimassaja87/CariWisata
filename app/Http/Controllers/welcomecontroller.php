<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Wisata;

class welcomecontroller extends Controller
{
     public function welcome()
     {
        $data = kota::all();
        $data1 = Wisata::all();
            return view('welcome',compact('data','data1'));
     }
}

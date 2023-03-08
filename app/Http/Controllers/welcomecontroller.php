<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class welcomecontroller extends Controller
{
     public function welcome()
     {
        $data = kota::all();
            return view('welcome',compact('data'));
     }
}

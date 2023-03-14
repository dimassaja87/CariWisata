<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grafik;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    
    public function index()
{
    $grafik=grafik::all();

        $categories = [];
        
        foreach ($grafik as $coba) {
            $coba[] = [
                'judul' => $grafik->judul,
                'views' => $grafik->views
            ];
        }
        

    return view('grafik', ['categories'=>$categories]);
}
    
}

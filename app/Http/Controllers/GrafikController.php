<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grafik;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    public function index()
    {
        $destinatis   = Grafik::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');
        $months = Grafik::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month'); 

        $datas = array(11,9,2,4,6,7,8,9,3,2,8,0);
        foreach($months as $index => $month)
        {
            $datas[$month] = $destinatis[$index];
        }

        return view('grafik',compact('datas'));
    }
    
}

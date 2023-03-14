<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;

class ChartController extends Controller
{
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $data = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months as $index => $month) {
            $data[$month] = $users[$index];
        }
        return view('admin.charts.chart', compact('data'));
    }

    public function showBarChart()
    {
        $chart =  User::create('bar', 'highcharts')
            ->title('Bar Chart')
            ->labels(['Jan', 'Feb', 'Mar'])
            ->values([10, 20, 30]);

        return view('charts.bar', ['chart' => $chart]);
    }
    public function nyoba()
{
    return view('nyoba');
}
}

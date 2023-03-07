<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
            $home = $request->search;
            $home = kota::where('name', 'like', "%" . $request->$home. "%")->paginate(5);
            return view('user.home', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

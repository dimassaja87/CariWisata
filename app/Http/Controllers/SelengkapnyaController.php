<?php

namespace App\Http\Controllers;

use App\Models\KotaDetail;
use Illuminate\Http\Request;

class Selengkapnya extends Controller
{
    public function selengkapnya($id)
    {
        $id_kota = KotaDetail::find($id);
        return view('user.selengkapnya', ['id_kota' => $id_kota]);
    }
}

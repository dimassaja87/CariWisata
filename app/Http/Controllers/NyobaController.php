<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NyobaController extends Controller
{
    public function nyoba(Request $request)
    {
        $validated = $request->validate([
            'images.*' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
            }
        }

        return redirect('/adminn')->with('success', 'Gambar berhasil diunggah');
    }
}

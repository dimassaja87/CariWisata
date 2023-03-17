<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NyobaController extends Controller
{
    public function nyoba(Request $request)
    {
        $files = $request->file('foto');
        foreach ($files as $file) {
            // do something with the file
            $filename = $file->getClientOriginalName();
            $file->move(public_path('foto'), $filename);
        }
        return back()->with('success', 'Files uploaded successfully');
    }
}

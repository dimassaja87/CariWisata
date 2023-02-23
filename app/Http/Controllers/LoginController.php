<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function loginadmin()
    {
        return view('admin.loginadmin');
    }

    public function registeradmin()
    {
        return view('admin.registeradmin');
    }

    public function registeradmindua(Request $request)
    {
        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);

        return redirect('/loginadmin');
    }
}

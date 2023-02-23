<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

// use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function loginadmin()
    {
        return view('admin.loginadmin');
    }

    public function loginadmindua(Request $request)
    {
        if (FacadesAuth::attempt($request->only('name', 'password'))){
            return redirect('/adminn');
        }

        return \redirect('admin.loginadmin');
    }

    public function registeradmin()
    {
        return view('admin.registeradmin');
    }

    public function registeradmindua(Request $request)
    {
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);

        return redirect('/loginadmin');
    }

    public function logoutadmin()
    {
        FacadesAuth::logout();
        return \redirect('loginadmin');
    }
}

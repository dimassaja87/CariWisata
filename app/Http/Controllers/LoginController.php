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
        if (FacadesAuth::attempt($request->only('email', 'password'))){
            return redirect('/adminn');
        }

        return \redirect('loginadmin');
    }

    public function registeradmin()
    {
        return view('admin.loginadmin');
    }

    public function registeradminrdua(Request $request)
    {
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);

        return redirect('/loginuser');
    }

    public function logoutuser()
    {
        return view('user.logoutuser');
    }

        public function loginuser()
        {
            return view('user.loginuser');
        }

        public function loginuserdua(Request $request)
        {
            if (FacadesAuth::attempt($request->only('email', 'password'))){
                return redirect('/user');
            }

            return \redirect('loginuser');
        }

        public function registeruser()
        {
            return view('user.registeruser');
        }

        public function registeruserdua(Request $request)
        {
            User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),

            ]);

            return redirect('/loginuser');
        }

        // public function logoutuser()
        // {
        //     return view('user.logoutuser');
        // }

}

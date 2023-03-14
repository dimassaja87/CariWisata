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
        if (FacadesAuth::attempt($request->only('email', 'password'))) {
            return redirect('/adminn');
        }

        return \redirect('loginadmin');
    }

    public function registeradmin()
    {
        return view('admin.loginadmin');
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
        return view('admin.logoutadmin');
    }

    //user
    public function login()
    {
        return view('user.login');
    }

    public function loginuserdua(Request $request)
    {
        if (FacadesAuth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }

        return redirect('login');
    }
    public function logoutuser()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function registeruser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);

        return redirect('/login');
    }

   
    public function editprofil()
    {
        return view('profile.editprofile');
    }
    public function updateprofil(Request $request,$id)
    {
        $data = User::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')){
            $data->foto = $request->file('foto')->store('foto','public');
        }
        $data->save();

        return redirect('profil')->with('sukses','Data Berhasil di Perbarui');
    }
    public function profil()
    {
        $data = Destinasi::all();

        return view ('profile.profil',compact('data'));
    }
}

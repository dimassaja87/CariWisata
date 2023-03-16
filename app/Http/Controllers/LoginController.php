<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

 use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        $request->validate([
            'email' => 'required|unique:users'
        ]);
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
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // menentukan apakah remember me diaktifkan atau tidak

    if (Auth::attempt($credentials, $remember)) {
        // login berhasil
        return redirect()->intended('/');
    } else {
        // login gagal
        return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
    }
    }

    public function logoutuser(){
        Auth::logout();
        request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('login');

    }

    public function register()
    {
        return view('user.register');
    }

    public function registeruser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:50',
            'password_confirmation' => 'required|same:password',
        ],[
            'password.required' => 'Sandi harus diisi',
            'password.min' => 'Password harus diisi minimal 5',
            'password.max' => 'Password harus diisi maksimal 50',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);

        return redirect('/login')->with('sukses','Berhasil Registrasi. Silahkan Login!');
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



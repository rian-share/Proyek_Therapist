<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginDanRegister extends Controller
{
    public function login()
    {
        return view('therapist.login');
    }
    
    public function SimpanLogin(Request $login)
    {
        // dd($login);
        $login->validate([
            'nama_pengguna' => ['required', 'max:225', 'min:5'],
        ]);

        $loginVer = $login->validate([
            'email' => ['required', 'max:225', 'email'],
            'kata_sandi' => ['required', 'min:5', 'max:225']
        ]);

        if (Auth::attempt(['email' => $loginVer['email'], 'password' => $loginVer['kata_sandi']])) {
            $user = Auth::user();
            if ($user->nama_pengguna == $login->nama_pengguna) {
                $login->session()->regenerate();

                return redirect()->intended('/home');
            }
        }
        return back()->with('loginEror', 'Login gagal, silahkan coba lagi');
    }



    public function register()
    {
        return view('therapist.Register');
    }

    public function SimpanRegistrasi(Request $registrasi)
    {

        $validasiRegistrasi =  $registrasi->validate([
            'nama_pengguna' => ['required', 'max:225', 'unique:users', 'min:5'],
            'kata_sandi' => ['required', 'confirmed', 'max:100', 'min:5'],
            'email' => ['required', 'email', 'unique:users', 'max:225'],
        ]);

        $validasiRegistrasi['kata_sandi'] = bcrypt($registrasi->kata_sandi);

        User::create($validasiRegistrasi);
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login');
    }

    public function logout(Request $logout)
    {
        Auth::logout();
        $logout->session()->invalidate();
        $logout->session()->regenerateToken();

        return redirect('/login')->with('successLogout', 'Logout berhasil');
    }
}

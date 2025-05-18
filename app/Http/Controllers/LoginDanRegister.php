<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class LoginDanRegister extends Controller
{
    public function login()
    {
        return view('therapist.login');
    }



    public function register()
    {
        return view('therapist.Register');
    }

    public function SimpanRegistrasi(Request $registrasi)
    {
        
        $validasiRegistrasi =  $registrasi->validate([
            'nama_pengguna' => ['required', 'max:225', 'unique:users'],
            'kata_sandi' => ['required', 'confirmed'],
            'email' => ['required', 'email:dns', 'unique:users', 'max:225'],
            'nomor_telepon' => ['max:11', 'min:10']
        ]);

        $validasiRegistrasi['kata_sandi']->bcrypt($registrasi->kata_sandi);
        
        User::create($validasiRegistrasi);
        return redirect('/')->with('success', 'Registrasi berhasil, silahkan login');
    }
}

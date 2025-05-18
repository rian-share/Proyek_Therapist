<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDanRegister;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Therapist;
use Illuminate\Container\Attributes\Log;

Route::get('/s', function () {
    return view('welcome');
});
Route::controller(LoginDanRegister::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/loginAuthentication', 'SimpanLogin')->name('loginSimpan');
    Route::get('/register', 'register');
    Route::post('/registrasi/simpan', 'SimpanRegistrasi')->name('registrasi');
    Route::post('/logout','logout')->name('logout');
});

Route::controller(Therapist::class)->group(function () {
    Route::get('/home', 'Home')->middleware('auth');
});

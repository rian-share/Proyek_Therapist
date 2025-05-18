<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDanRegister;
use App\Http\Controllers\Dashboard;
use Illuminate\Container\Attributes\Log;

Route::get('/s', function () {
    return view('welcome');
});
Route::controller(LoginDanRegister::class)->group(function () {
    Route::get('/', 'login');
    Route::get('/register', 'register');
    Route::post('/registrasi/simpan', 'SimpanRegistrasi')->name('registrasi');
});




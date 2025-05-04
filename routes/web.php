<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterDanLogin;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[RegisterDanLogin::class,'login']);
Route::get('/register',[RegisterDanLogin::class,'register']);
Route::get('/home',[Dashboard::class,'home']);


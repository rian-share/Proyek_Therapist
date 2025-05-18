<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Therapy;

class Dashboard extends Controller
{
    public function home(){
        $query = Jenis_Therapy::all();
        foreach ($query as $q) {
            $q->penjelasan = Str::limit($q->penjelasan,10);
        }
        return view('therapist.home',compact('query'));
    }
}

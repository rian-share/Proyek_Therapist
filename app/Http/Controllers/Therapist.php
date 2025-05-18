<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Therapy;
use Illuminate\Support\Str;
class Therapist extends Controller
{
    public function Home(){
          $query = Jenis_Therapy::all();
            foreach ($query as $q) {
            $q->penjelasan = Str::limit($q->penjelasan,80);
        }
        return view('therapist.home',compact('query'));
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table = 'ulasan';
    protected $guarded = ['id'];

    public function JanjiTemu(){
        return $this->belongsTo(Janji_Temu::class,'id_janji','id');
    }

    public function User(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function terapis(){
        return $this->belongsTo(Terapis::class,'id_terapis','id');
    }
}

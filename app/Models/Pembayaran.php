<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $guarded = ['id'];

    public function JanjiTezmu(){
        return $this->belongsTo(Janji_Temu::class,'id_janji','id');
    }
}

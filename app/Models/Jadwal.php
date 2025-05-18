<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $guarded = ['id'];
    
    public function terapis(){
    return $this->belongsTo(Terapis::class,'id_terapis');
    }

    public function JanjiTemu(){
        return $this->hasMany(Janji_Temu::class,'id_jadwal','id');
    }

    

}

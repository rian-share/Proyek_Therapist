<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Janji_Temu extends Model
{
    protected $table = 'janji_temu';
    protected $guarded = ['id'];

    public function terapis(){
        return $this->belongsTo(Terapis::class,'id_terapis');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function jadwal(){
        return $this->belongsTo(Jadwal::class,'id_jadwal');
    }
}

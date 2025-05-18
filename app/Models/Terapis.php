<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terapis extends Model
{
    protected $table = 'terapis';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function JanjiTamu(){
        return $this->hasMany(Terapis::class,'id_terapis');
    }
}

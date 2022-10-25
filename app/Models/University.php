<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    public $fillable = ['nombre','direccion','telefono','tipo','url_web','image','slug','likes','id_municipio'];


    public function municipality(){
        return $this->belongsTo(Municipality::class,'id_municipio');
    }

    public function careers(){
        return $this->hasMany(Career::class,'id_universidad','id');
    }

}

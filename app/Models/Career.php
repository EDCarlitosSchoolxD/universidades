<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public $fillable = ['carera','descripcion','objetivo','aprendizaje','trabajo','perfil_ingreso','perfil_egreso','plan_estudio'
    ,'image','id_universidad','tipo','slug','likes'];

    public function university(){
        return $this->belongsTo(University::class,'id_universidad');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public $fillable = ['municipio','image','slug','id_state'];

    public function state(){
        return $this->belongsTo(State::class,'id_state');
    }

}

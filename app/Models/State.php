<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = true;

    public $fillable = ['estado','slug','image'];

    use HasFactory;

    public function municipalities(){
        return $this->hasMany(Municipality::class,'id_state','id');
    }
}

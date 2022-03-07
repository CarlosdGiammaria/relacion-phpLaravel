<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    use HasFactory;
    public function Aprendizs(){
        return $this->belongsTo(Aprendiz::class,'id_apreindiz');
            }
}

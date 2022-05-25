<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;


    public function salle()
    {

    return $this->belongsTo(salles::class,'id_salle');
}

public function realisateur (){
    return $this->belongsTo(realisateurs::class,'id_real');
}
}
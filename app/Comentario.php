<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    
    public function jogador(){
        return $this->belongsTo("App\Jogador");
    }
}

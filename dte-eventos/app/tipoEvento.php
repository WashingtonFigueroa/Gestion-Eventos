<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoEvento extends Model
{
    protected $table = 'tipoeventos';
    
    public function eventos(){
        return $this->hasMany('App\Evento');
    }
}

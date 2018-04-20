<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    public function orgeventos(){ 
        return $this->hasMany('App\OrgEvento');
    }

    public function asistentes(){
        return $this->hasMany('App\Asistentes');
    }

}

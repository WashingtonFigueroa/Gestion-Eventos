<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    protected $table = 'organizadores';
    
    public function orgeventos(){
        return $this->hasMany('App\OrgEvento');
    }
}

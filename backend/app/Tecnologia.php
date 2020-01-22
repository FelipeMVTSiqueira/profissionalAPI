<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profissional;

class Tecnologia extends Model
{
    protected $table = "tecnologias";

    public function profissionais(){
        return $this->belongsToMany('App\Profissional', 'profissionais_tecnologias', "tecnologias_id", "profissionais_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emptemp extends Model
{
    //
    public function semestre(){
        return $this->belongsTo('App\Models\Semestre','semestre_id');
    }
    public function filiere(){
        return $this->belongsTo('App\Models\Filiere','filiere_id');
    }
    public function site(){
        return $this->belongsTo('App\Models\Site','site_id');
    }
    public function annee(){
        return $this->belongsTo('\App\Models\Annee','annee_id');
    }
}

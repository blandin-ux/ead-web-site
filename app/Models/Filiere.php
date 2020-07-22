<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    //
    public function reclamation(){
        return $this->belongsTo('App\Models\reclamation','reclamation_id');
    }
}

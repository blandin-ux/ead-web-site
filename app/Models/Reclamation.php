<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    //
    public function type(){
        return $this->belongsTo('App\Models\Type','type_id');
    }
    public function filiere(){
        return $this->belongsTo('App\Models\Filiere','filiere_id');
    }

        public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}

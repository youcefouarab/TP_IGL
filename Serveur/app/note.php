<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    public $timestamps = false;
    
    public function etudiant()
    {
        return $this->belongsTo('App\etudiant');
    }
}

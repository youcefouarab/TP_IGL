<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compte extends Model
{
    protected $fillable= ['login', 'type', 'password'];
    public $timestamps = false;
    public function etudiant()
    {
        return $this->hasOne('App\etudiant');
    }
}

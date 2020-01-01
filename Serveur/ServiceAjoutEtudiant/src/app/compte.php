<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Modele d'un compte.
 */
class compte extends Model
{
    protected $fillable= ['login', 'type', 'password'];
    public $timestamps = false;

    /**
         * Retourne l'etudiant associe a ce compte.
         * 
         * @return Etudiant L'etudiant associe a ce compte.
         */
    public function etudiant()
    {
        
        return $this->hasOne('App\etudiant');
    }
}

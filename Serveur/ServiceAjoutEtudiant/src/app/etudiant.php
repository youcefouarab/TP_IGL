<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Modele d'un etudiant.
 */
class etudiant extends Model
{
    protected $fillable= ['nom', 'prenom', 'date_naissance', 'lieu_naissance', 'annee'];
    public $timestamps = false;
    
    /**
         * Retourne le compte associe a cet etudiant.
         * 
         * @return Compte Le compte associe a cet etudiant.
         */
    public function compte()
    {
        
        return $this->belongsTo('App\compte');
    }
}

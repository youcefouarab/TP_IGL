<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $fillable= ['nom', 'prenom', 'date_naissance', 'lieu_naissance', 'annee'];
    public $timestamps = false;
    public function notes()
    {
        return $this->hasMany('App\note');
    }
    public function compte()
    {
        return $this->belongsTo('App\compte');
    }
}

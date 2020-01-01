<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\note;

/**
 * Controlleur du modele `note`.
 */
class noteController extends Controller
{
   /**
    * Recuperer les notes de l'etudiant avec le matricule `matricule` a partir de la base de donnees.
    * 
    * @return Note Les lignes de bdd correspondant a l'etudiant.
    */
   public function show($matricule) {
        return Note::where('matricule','=',$matricule)->get();
   }
}

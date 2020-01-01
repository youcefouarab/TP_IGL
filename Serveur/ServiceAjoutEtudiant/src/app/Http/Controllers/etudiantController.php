<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\etudiant;
use App\compte;
/**
 * Controlleur du modele `etudiant`.
 */
class etudiantController extends Controller
{
    /**
         * Ajoute une etudiant dans la base de donnees.
         * 
         * Verifie si l'etudiant existe deja.
         * Si non, elle cree son compte (genere un login et un mot de pass) et l'ajoute dans la table `comptes` de la bdd.
         * Ensuite elle ajoute l'etudiant de la table `etudiants`, l'associe a son compte.
         * 
         * @param  Request $request La requete POST envoyee par le frontend contenant les informations de l'etudiant.
         * 
         * @return  String  Un message indiquant le succes ou echec de l'ajout de l'etudiant.
         */
    public function store(Request $request) {

        if (Compte::where('login','=',$request->nom)->where('password','=',$request->prenom.$request->date_naissance)->exists()) 
            return "existe";
        else {
            $compte=new compte();
            $compte->login=($request->nom);
            $compte->password=($request->prenom).$request->date_naissance;
            $compte->type="etudiant";
            $save=$compte->save();
            if ($save) {
                $etudiant=new etudiant();
                $etudiant->nom=$request->nom;
                $etudiant->prenom=$request->prenom;
                $etudiant->date_naissance=$request->date_naissance;
                $etudiant->lieu_naissance=$request->lieu_naissance;
                $etudiant->annee=$request->annee;
                $etudiant->compte()->associate($compte);
                $save=$etudiant->save();
                if ($save) return "succes";
                else return "echec";
            } else {
                return "echec";
            }
        }
    }
}

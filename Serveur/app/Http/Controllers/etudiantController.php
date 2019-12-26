<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\etudiant;
use App\compte;

class etudiantController extends Controller
{
    public function store(Request $request) {
        
        if (Compte::where('login','=',$request->nom)->where('password','=',$request->prenom.$request->date_naissance)->exists()) 
            return "exist";
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

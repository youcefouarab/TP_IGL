<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\note;

class noteController extends Controller
{
   public function show($matricule) {
        return Note::where('id_etudiant','=',$matricule)->get();
   }
}

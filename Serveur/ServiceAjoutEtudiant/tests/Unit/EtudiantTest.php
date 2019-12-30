<?php

namespace Tests\Unit;

use App\Etudiant;
use App\Compte;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EtudiantTest extends TestCase
{
    use RefreshDatabase;

    public function testAjouterEtudiant(){
        
        $this->assertCount(0, Etudiant::all());
        $this->assertCount(0, Compte::all());

        $this->post('/api/ajouter', [
            "nom" => "ouarab",
            "prenom" => "youcef",
            "date_naissance" => "1999-03-17",
            "lieu_naissance" => "beo",
            "annee" => "1CS"
        ]);

        $this->assertCount(1, Etudiant::all());
        $this->assertCount(1, Compte::all());
    }
}

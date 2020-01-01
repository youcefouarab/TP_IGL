<?php

namespace Tests\Unit;

use App\Etudiant;
use App\Compte;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Test unitaire d'ajout d'etudiant
 */
class EtudiantTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste l'API `ajouter`.
     * 
     * Assure que la base de donnees de test est vide.
     * Effectue une requete POST vers l'API `ajouter` avec un etudiant.
     * Assure que l'etudiant et son compte sont ajoutes dans les tables `etudiants` et `comptes` respectivement.
     */
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

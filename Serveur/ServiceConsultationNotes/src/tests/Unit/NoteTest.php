<?php

namespace Tests\Unit;

use App\Note;
use App\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


/**
 * Test unitaire de consultation de notes
 */
class NoteTest extends TestCase
{
    use RefreshDatabase;


    /**
     * Teste l'API `notes`.
     * 
     * Remplit la base de donnees avec des notes aleatoires.
     * Assure qu'il y a 8 lignes de notes.
     * Effectue une requete GET vers l'API `notes` avec le matricule `1`.
     * Assure que la reponse est en etat `200`.
     */
    public function testConsulterNotes(){
        
        $this->seed('DatabaseSeeder');

        $this->assertCount(8, Note::all());

        $response = $this->get('/api/notes/1');
        
        $response->assertStatus(200);
        
        //dd($response);
    }
}

<?php

namespace Tests\Unit;

use App\Note;
use App\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NoteTest extends TestCase
{
    use RefreshDatabase;

    public function testNoteShowMarche(){
        
        $this->seed('DatabaseSeeder');

        $this->assertCount(8, Note::all());

        $response = $this->get('/api/notes/1');
        
        $response->assertStatus(200);
        
        dd($response);
    }
}

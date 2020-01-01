<?php

use Illuminate\Database\Seeder;

/**
 * Seeder pour ajouter un etudiant pour les tests.
 */
class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etudiants')->insert([
            'nom' => 'Ouarab',
            'prenom' => 'Youcef',
            'date_naissance' => '1999-03-16',
            'lieu_naissance' => 'Bab El Oued',
            'annee' => '1CS',
            'compte_id' => DB::getPdo()->lastInsertId()
        ]);
    }
}

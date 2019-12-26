<?php

use Illuminate\Database\Seeder;

class ComptesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comptes')->insert([
            'login' => 'Ouarab',
            'type' => 'etudiant',
            'password' => 'Youcef1999-03-16'
        ]);
    }
}

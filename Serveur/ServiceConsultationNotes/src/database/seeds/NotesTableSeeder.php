<?php

use Illuminate\Database\Seeder;

/**
 * Seeder pour ajouter un compte pour les tests.
 */
class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Ajouter 8 modules avec des notes CC, CI, CF aleatoires et calculer la moyenne pour chacun.
     *
     * @return void
     */
    public function run()
    {
        $modules=array('IGL','SYC1','THP','ANUM','RES1','RO','ORG','ANG');        
        foreach ($modules as $module) {
            $cc=rand(0,20);
            $ci=rand(0,20);
            $cf=rand(0,20);
            $moy=($cc+$ci+2*$cf)/4;
            DB::table('notes')->insert([
                'module' => $module,
                'cc' => $cc,
                'ci' => $ci,
                'cf' => $cf,
                'moy' => $moy,
                'matricule' => 1
            ]);
        }

    }
}

<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules=array('IGL','SYC1','THP','ANUM','RES1','RO','ORG','ANG');  
        $id_etud=DB::getPdo()->lastInsertId();       
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
                'id_etudiant' => $id_etud
            ]);
        }

    }
}

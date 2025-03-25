<?php

namespace Modules\PkgWidget\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PkgWidget\Models\Apprenant;

class ApprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Article::factory()->count(4)->create();
        Apprenant::create([
            
                //
                'nom' =>"nom 1",
                'prenom' => "prenom 1",
                'etat' => true  
           
        ]);
        Apprenant::create([
            
            //
            'nom' =>"nom 2",
            'prenom' => "prenom 2",
            'etat' => true  
       
    ]);        Apprenant::create([
            
        //
        'nom' =>"nom 3",
        'prenom' => "prenom 3",
        'etat' => true  
   
]);
    
    }
}

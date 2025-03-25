<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use Illuminate\Database\Seeder;

class AprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apprenant::create([
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'active' => true 
        ]);
    
        Apprenant::create([
            'nom' => 'Martin',
            'prenom' => 'Sophie',
            'active' => true 
        ]);
    
        Apprenant::create([
            'nom' => 'Lemoine',
            'prenom' => 'Pierre',
            'active' => true 
        ]);
    
        Apprenant::create([
            'nom' => 'Dufresne',
            'prenom' => 'Marie',
            'active' => true 
        ]);
    
        Apprenant::create([
            'nom' => 'Benoit',
            'prenom' => 'Lucie',
            'active' => true 
        ]);
    }
    
}

<?php

namespace Database\Seeders;

use App\Models\Livre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Livre::create([
            'titre' => 'titre1',
            'auteur'=> 'auteur1',
            'nombre_pages'=> 11,
            'categorie'=> 'technologie'
        ]);
        Livre::create([
            'titre' => 'titre1',
            'auteur'=> 'auteur1',
            'nombre_pages'=> 11,
            'categorie'=> 'IT'
        ]);        Livre::create([
            'titre' => 'titre1',
            'auteur'=> 'auteur1',
            'nombre_pages'=> 11,
            'categorie'=> 'Environnement'
        ]);        Livre::create([
            'titre' => 'titre1',
            'auteur'=> 'auteur1',
            'nombre_pages'=> 11,
            'categorie'=> 'categorie'
        ]); 
    }
}

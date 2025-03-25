<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appelle les seeders nécessaires
        $this->call([
   
            AprenantSeeder::class,
        ]);
    }
}

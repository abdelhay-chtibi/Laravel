<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Produit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        // \App\Models\Matiere::factory(10)->create();
        // $this->call(
        //     ProfileSeeder::class
        // );
        // Categorie::factory()
        //     ->has(Produit::factory()->count(4))
        //     ->count(3)
        //     ->create();
    }
}

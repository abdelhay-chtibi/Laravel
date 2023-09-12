<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // DB::table('personnes')->insert([
        //     'nom' => 'N1',
        //     'date_naiss' => '2000-11-09'
        // ]);

        // DB::table('personnes')->insert([
        //     'nom' => 'N2',
        //     'date_naiss' => '2000-10-09'
        // ]);
        $this->call([
            PersonneSeeder::class
        ]);
    }
}

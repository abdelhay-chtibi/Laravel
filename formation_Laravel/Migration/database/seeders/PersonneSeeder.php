<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('personnes')->insert([
        //     'nom' => 'N3',
        //     'date_naiss' => '2000-11-09'
        // ]);

        // DB::table('personnes')->insert([
        //     'nom' => 'N4',
        //     'date_naiss' => '2000-10-09'
        // ]);
        DB::table('personnes')->insert([
            'nom' => 'N5',
            'date_naiss' => '2000-11-09'
        ]);

        DB::table('personnes')->insert([
            'nom' => 'N6',
            'date_naiss' => '2000-10-09'
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Hash;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::factory(20)->create();
        // DB::table('profiles')->insert([
        //     'name'=>Str::random(20),
        //     'email'=>Str::random(10)."gmail.com",
        //     'password'=>Hash::make('password'),
        //     'bio'=>Str::random(255)
        // ]);
    }
}

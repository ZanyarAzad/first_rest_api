<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
//import user model
use App\Models\{User,Categories,Cities,Properties,Contacts};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        //Contacts::factory(20)->create();
        // User::factory(10)->create();
        // Contacts::factory(20)->create();
        //Categories::factory(6)->create();
        // Cities::factory(10)->create();
        //Properties::factory(100)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

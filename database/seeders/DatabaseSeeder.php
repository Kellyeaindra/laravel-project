<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
       
        \App\Models\RoomNum::factory(10)->create();
    
        \App\Models\UnMessage::factory(15)->create();

        \App\Models\DrugS::factory(12)->create();

        \App\Models\DoctorApp::factory(7)->create();
    }
}

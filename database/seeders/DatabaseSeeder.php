<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'heaven',
        //     'email' => 'heavensipangkar1@gmail.com',
        //     'password' => 'main12345'
        // ]);

        // User::factory()->create([
        //     'name' => 'adelle',
        //     'email' => 'adelle@gmail.com',
        //     'password' => 'main12345'
        // ]);

        User::factory()->create([
            'name' => 'gabriel',
            'email' => 'gabriel@gmail.com',
            'password' => 'main12345'
        ]);
    }
}
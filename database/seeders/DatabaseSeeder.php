<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 2,

        ]);

        \App\Models\User::factory()->create([
            'name' => 'Client',
            'email' => 'Client@gmail.com',
            'password' => bcrypt('client'),
            'role' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'role' => 0,
            
        ]);
    }
}

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

        \App\Models\User::factory()->create([
            'is_superadmin' => true,
            'email' => 'superadmin@gmail.com',
        ]);
        \App\Models\User::factory()->create([
            'is_superadmin' => false,
            'email' => 'guest@gmail.com',
        ]);
    }
}

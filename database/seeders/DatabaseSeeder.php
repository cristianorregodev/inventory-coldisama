<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ClientSeeder::class);
        $this->call(ProductSeeder::class);
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Cristian Orrego',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('santamaria'),
        ]);

        User::factory()->create([
            'name' => 'Inventario',
            'email' => 'inventario@inventario.com',
            'email_verified_at' => now(),
            'password' => bcrypt('santamaria'),
        ]);
    }
}

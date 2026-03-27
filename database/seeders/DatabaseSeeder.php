<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@lantassultra.id',
            'password' => bcrypt('password123'),
        ]);

        \App\Models\Setting::insert([
            ['key' => 'phone', 'value' => '0812-3456-7890'],
            ['key' => 'address', 'value' => 'Jl. Haluoleo No.1, Kendari, Sulawesi Tenggara'],
            ['key' => 'instagram', 'value' => 'https://instagram.com/rtmcpoldasultra'],
        ]);
        
        \App\Models\Officer::insert([
            ['name' => 'Irjen Pol. Didik Agung Widjanarko', 'position' => 'Kapolda Sultra', 'sort_order' => 1],
            ['name' => 'Kombes Pol. Zainal Rio Tangkari', 'position' => 'Dirlantas Polda Sultra', 'sort_order' => 2],
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(8)->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
            'data_nascimento' => Carbon::now()->subYear(20)->format('Y-m-d')
        ]);
    }
}

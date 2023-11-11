<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        User::create([
            'id' => 123,
            'name' => 'Test User',
            'address' => '123 Test Street',
            'phone' => '1234567890',
        ]);

        User::create([
            'id' => 456,
            'name' => 'Haha User',
            'address' => '123 Haha Street',
            'phone' => '1234567890',
        ]);

        User::create([
            'id' => 789,
            'name' => 'Hihi User',
            'address' => '123 Hihi Street',
            'phone' => '1234567890',
        ]);
    }
}

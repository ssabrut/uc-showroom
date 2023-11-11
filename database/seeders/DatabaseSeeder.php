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
            'id' => 3578101010100001,
            'name' => 'Test User',
            'address' => '123 Test Street',
            'phone' => '0812-3456-7890',
        ]);

        User::create([
            'id' => 3578101010100002,
            'name' => 'Haha User',
            'address' => '123 Haha Street',
            'phone' => '0812-3456-7890',
        ]);

        User::create([
            'id' => 3578101010100003,
            'name' => 'Hihi User',
            'address' => '123 Hihi Street',
            'phone' => '0812-3456-7890',
        ]);
    }
}

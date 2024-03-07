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

        \App\Models\User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'petugas',
                'email' => 'petugas@example.com',
                'role' => 'petugas',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'peminjam',
                'email' => 'peminjam@example.com',
                'role' => 'peminjam',
                'password' => bcrypt('password')
            ],
        ]);
    }
}

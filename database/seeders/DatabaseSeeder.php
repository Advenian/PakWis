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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Super Admin',
            'username' => 'Super Admin Username',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('Super Admin'),
            'role' => 'superadmin',
        ]);
        User::create([
            'name' => 'Admin',
            'username' => 'Admin Username',
            'email' => 'admin@example.com',
            'password' => bcrypt('Admin'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Worker',
            'username' => 'Worker Username',
            'email' => 'worker@example.com',
            'password' => bcrypt('Worker'),
            'role' => 'worker',
        ]);
        User::create([
            'name' => 'User',
            'username' => 'User Username',
            'email' => 'user@example.com',
            'password' => bcrypt('User'),
            'role' => 'user',
        ]);
    }
}

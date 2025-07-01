<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'status' => 'active', 'role' => 'admin', 'password' => 'admin']);
        User::create(['name' => 'staff', 'email' => 'staff@gmail.com', 'status' => 'active', 'role' => 'staff', 'password' => 'staff']);
        User::create(['name' => 'member', 'email' => 'member@gmail.com', 'status' => 'active', 'role' => 'member', 'password' => 'member']);
    }
}

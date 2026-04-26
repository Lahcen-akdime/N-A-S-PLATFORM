<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'lahcen',
            'email' => 'lahcen123@example.com',
            'password' => 'lahcen123@example.com',
            'role' => 'admin',
        ]);
    }
}

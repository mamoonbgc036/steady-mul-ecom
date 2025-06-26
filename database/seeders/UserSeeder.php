<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mamoon',
            'email' => 'mamoon@example.com',
            'password' => Hash::make('mamoon'), // ✅ secure, will use bcrypt with default cost
        ]);
    }
}

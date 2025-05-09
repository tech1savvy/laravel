<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a basic admin user
        User::create([
            'username' => 'tech1savvy',
            'password' => Hash::make('tech1savvy'),
        ]);
    }
}
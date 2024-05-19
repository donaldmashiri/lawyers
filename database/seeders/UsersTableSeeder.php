<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'user_type' => 'lawyer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'user_type' => 'customer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'user_type' => 'lawyer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'user_type' => 'customer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@example.com',
                'user_type' => 'lawyer',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Sarah Taylor',
                'email' => 'sarah.taylor@example.com',
                'user_type' => 'customer',
                'password' => Hash::make('password'),
            ],
        ];

        // Insert users into the database
        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}

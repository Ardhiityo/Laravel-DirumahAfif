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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@test',
            'password' => Hash::make('rahasia')
        ]);
        $admin->assignRole('admin');

        $penulis = User::create([
            'name' => 'penulis',
            'email' => 'penulis@test',
            'password' => Hash::make('rahasia')
        ]);
        $penulis->assignRole('penulis');

        $visitor = User::create([
            'name' => 'visitor',
            'email' => 'visitor@test',
            'password' => Hash::make('rahasia')
        ]);
        $visitor->assignRole('visitor');
    }
}

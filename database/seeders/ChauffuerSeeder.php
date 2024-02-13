<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChauffuerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User =  User::create([
            'name' => 'Chauffeur',
            'email' => 'Chauffeur@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Chauffeur'),
        ]);
        $User->assignRole('Chaufeur');
    }
}

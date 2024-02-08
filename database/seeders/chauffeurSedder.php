<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class chauffeurSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'chauffeur',
            'email' => 'chauffeur@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('chauffeurchauffeur'),
        ]);
        $user->assignRole('passager', 'chauffeur');
    }
}

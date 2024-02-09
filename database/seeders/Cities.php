<?php

namespace Database\Seeders;

use App\Models\horaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\routes;

class Cities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        $cities = [
            'Agadir', 'Al Hoceima', 'Beni Mellal', 'Casablanca', 'Dakhla', 'El Jadida', 'Essaouira',
            'Fès', 'Kénitra', 'Khouribga', 'Laâyoune', 'Larache', 'Meknès', 'Mohammedia', 'Nador',
            'Ouarzazate', 'Oujda', 'Rabat', 'Safi', 'Salé', 'Tanger', 'Tétouan'
        ];

        foreach ($cities as $city) {
            routes::create([
                'start_city' => $city,
                'end_city' => $city,
            ]);
        }

        }
    }


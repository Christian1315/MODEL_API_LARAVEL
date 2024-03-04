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
        ##======== CREATION D'UN ADMIN PAR DEFAUT ============####
        $userData = [
            'lastname' => 'SALIOU',
            'firstname' => 'Augustin',
            'email' => 'centredeformationabc@gmail.com',
            'password' => 'admin', #gogo@1315
            'phone' => "40544540",
        ];
        \App\Models\User::factory()->create($userData);

        ##======== CREATION DES FORMATIONS PAR DEFAUT ============####
        $formations = [
            [
                "name" => "Menuiserie aluminium et Vitrerie",
            ],
            [
                "name" => "Electricité bâtiment et énergie solaire photovoltaïque",
            ],
            [
                "name" => "Soudure et construction métallique",
            ],
            [
                "name" => "Stylisme modélisme/ broderie-layette",
            ]
        ];

        foreach ($formations as $formation) {
            \App\Models\Formations::factory()->create($formation);
        }
    }
}

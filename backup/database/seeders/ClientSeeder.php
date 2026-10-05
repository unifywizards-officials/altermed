<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Apollo Hospitals',
                'icon' => 'fas fa-hospital',
                'url' => 'https://www.apollohospitals.com',
                'description' => 'Leading healthcare provider with world-class medical facilities',
                'is_active' => true,
                'display_order' => 1,
            ],
            [
                'name' => 'Fortis Healthcare',
                'icon' => 'fas fa-heartbeat',
                'url' => 'https://www.fortishealthcare.com',
                'description' => 'Comprehensive healthcare services with advanced medical technology',
                'is_active' => true,
                'display_order' => 2,
            ],
            [
                'name' => 'Max Healthcare',
                'icon' => 'fas fa-user-md',
                'url' => 'https://www.maxhealthcare.in',
                'description' => 'Premium healthcare network with specialized medical care',
                'is_active' => true,
                'display_order' => 3,
            ],
            [
                'name' => 'Manipal Hospitals',
                'icon' => 'fas fa-stethoscope',
                'url' => 'https://www.manipalhospitals.com',
                'description' => 'Trusted healthcare partner with excellence in medical services',
                'is_active' => true,
                'display_order' => 4,
            ],
            [
                'name' => 'Narayana Health',
                'icon' => 'fas fa-plus-circle',
                'url' => 'https://www.narayanahealth.org',
                'description' => 'Affordable healthcare solutions with quality medical care',
                'is_active' => true,
                'display_order' => 5,
            ],
            [
                'name' => 'Medanta Hospital',
                'icon' => 'fas fa-building',
                'url' => 'https://www.medanta.org',
                'description' => 'Multi-specialty hospital with cutting-edge medical technology',
                'is_active' => true,
                'display_order' => 6,
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}

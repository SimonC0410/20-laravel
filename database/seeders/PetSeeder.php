<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new Pet();
        $pet->name        = 'Max';
        $pet->kind        = 'Dog';
        $pet->weight      = 20.5;
        $pet->age         = 3;
        $pet->breed       = 'Labrador';
        $pet->location    = 'Paris';
        $pet->description = 'Friendly and energetic';
        $pet->save();

        $pet = new Pet();
        $pet->name        = 'Misty';
        $pet->kind        = 'Cat';
        $pet->weight      = 10.2;
        $pet->age         = 1;
        $pet->breed       = 'Siamese';
        $pet->location    = 'Cairo';
        $pet->description = 'Calm and affectionate';
        $pet->save();

        $pet = new Pet();
        $pet->name        = 'Terry';
        $pet->kind        = 'Sparrow';
        $pet->weight      = 5.0;
        $pet->age         = 0.5;
        $pet->breed       = 'House Sparrow';
        $pet->location    = 'Mexico City';
        $pet->description = 'Small and chirpy';
        $pet->save();
    }
}

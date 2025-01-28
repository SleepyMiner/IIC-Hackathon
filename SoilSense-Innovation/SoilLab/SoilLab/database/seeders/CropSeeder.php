<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crop;
class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Crop::insert([
            [
                'name' => 'Mothbeans',
                'min_pH' => 6.0,
                'max_pH' => 7.5,
                'min_nitrogen' => 30,
                'max_nitrogen' => 50,
                'image_url' => "image/crops/mothbeans.jpg",

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rice',
                'min_pH' => 5.5,
                'max_pH' => 7.0,
                'min_nitrogen' => 20,
                'max_nitrogen' => 40,
                'image_url' => 'image/crops/rice.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maize',
                'min_pH' => 5.8,
                'max_pH' => 7.0,
                'min_nitrogen' => 25,
                'max_nitrogen' => 45,
                'image_url' => 'image/crops/maize.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }


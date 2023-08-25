<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i<200 ; $i++) { 
            Car::create([
                'merk' => $faker->sentence,
                'seri' => $faker->name,
                'silinder' => $faker->sentence,
                'tipe' => $faker->sentence,
                'sub_tipe' => "",
                'transmisi' => "AT",
                'tahun'=> "2020",
                'bahan_bakar'=> "BENSIN",
                'penggerak'=> "4X2",
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'id' => '1',
            'merk' => 'Toyota',
            'seri' => 'Innova',
            'silinder' => '1.0',
            'tipe' => 'RXZ',
            'sub_tipe' => '',
            'transmisi' => 'MT',
            'tahun' => '2015',
            'bahan_bakar' => 'BENSIN',
            'penggerak' => '4X2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);
        DB::table('cars')->insert([
            'id' => '2',
            'merk' => 'Wuling',
            'seri' => 'Air EV',
            'silinder' => '1.0',
            'tipe' => 'City Car',
            'sub_tipe' => '',
            'transmisi' => 'AT',
            'tahun' => '2022',
            'bahan_bakar' => 'BENSIN',
            'penggerak' => '4X2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);
        DB::table('cars')->insert([
            'id' => '3',
            'merk' => 'Hyundai',
            'seri' => 'Ionic',
            'silinder' => '2.0',
            'tipe' => 'Eletric Car',
            'sub_tipe' => '',
            'transmisi' => 'AT',
            'tahun' => '2023',
            'bahan_bakar' => 'BENSIN',
            'penggerak' => '4X4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);
    }
}

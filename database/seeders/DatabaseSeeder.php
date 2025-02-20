<?php

namespace Database\Seeders;

use App\Models\nilaiModel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        nilaiModel::insert([
            [
                'Usia' => 51,
                'Jenis_Kelamin' => 1,
                'Berat_Badan' => 13,
                'Tinggi_Badan' => 94,
                'IMD' => 1,
                'Status' => 'Gizi_baik'
            ],
            [
                'Usia' => 44,
                'Jenis_Kelamin' => 0,
                'Berat_Badan' => 12,
                'Tinggi_Badan' => 90,
                'IMD' => 0,
                'Status' => 'Gizi_buruk'
            ],
            [
                'Usia' => 48,
                'Jenis_Kelamin' => 1,
                'Berat_Badan' => 13,
                'Tinggi_Badan' => 93,
                'IMD' => 1,
                'Status' => 'Gizi_baik'
            ],
            [
                'Usia' => 45,
                'Jenis_Kelamin' => 0,
                'Berat_Badan' => 12,
                'Tinggi_Badan' => 89,
                'IMD' => 0,
                'Status' => 'Gizi_buruk'
            ],
            [
                'Usia' => 49,
                'Jenis_Kelamin' => 1,
                'Berat_Badan' => 13,
                'Tinggi_Badan' => 92,
                'IMD' => 1,
                'Status' => 'Gizi_baik'
            ],
            [
                'Usia' => 46,
                'Jenis_Kelamin' => 0,
                'Berat_Badan' => 12,
                'Tinggi_Badan' => 88,
                'IMD' => 0,
                'Status' => 'Gizi_buruk'
            ],
            [
                'Usia' => 50,
                'Jenis_Kelamin' => 1,
                'Berat_Badan' => 13,
                'Tinggi_Badan' => 91,
                'IMD' => 1,
                'Status' => 'Gizi_baik'
            ],
            [
                'Usia' => 47,
                'Jenis_Kelamin' => 0,
                'Berat_Badan' => 12,
                'Tinggi_Badan' => 87,
                'IMD' => 0,
                'Status' => 'Gizi_buruk'
            ],
        ]);
    }
}

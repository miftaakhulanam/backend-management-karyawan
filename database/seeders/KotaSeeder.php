<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kota::create(['nama' => 'Lamongan']);
        Kota::create(['nama' => 'Gresik']);
        Kota::create(['nama' => 'Tuban']);
        Kota::create(['nama' => 'Bojonegoro']);
    }
}

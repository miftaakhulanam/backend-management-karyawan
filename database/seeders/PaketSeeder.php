<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paket::create(['nama' => 'Paket 15']);
        Paket::create(['nama' => 'Paket 17']);
        Paket::create(['nama' => 'Paket 30']);
    }
}

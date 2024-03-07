<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kecamatan di Lamongan
        $lamongan = Kota::where('nama', 'Lamongan')->first();
        Kecamatan::create(['nama' => 'Babat', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Bluluk', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Brondong', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Deket', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Glagah', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Kalitengah', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Karangbinangun', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Karanggeneng', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Kedungpring', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Kembangbahu', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Lamongan', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Laren', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Maduran', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Mantup', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Modo', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Ngimbang', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Paciran', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Pucuk', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Sambeng', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Sarirejo', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Sekaran', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Solokuro', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Sugio', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Sukodadi', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Sukorame', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Tikung', 'kota_id' => $lamongan->id]);
        Kecamatan::create(['nama' => 'Turi', 'kota_id' => $lamongan->id]);

        // Kecamatan di Gresik
        $gresik = Kota::where('nama', 'Gresik')->first();
        Kecamatan::create(['nama' => 'Balongpanggang', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Benjeng', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Bungah', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Cerme', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Driyorejo', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Duduksampeyan', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Dukun', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Gresik', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Kebomas', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Kedamean', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Manyar', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Menganti', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Panceng', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Sangkapura', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Sidayu', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Tambak', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Ujungpangkah', 'kota_id' => $gresik->id]);
        Kecamatan::create(['nama' => 'Wringinanom', 'kota_id' => $gresik->id]);

        // Kecamatan di Tuban
        $tuban = Kota::where('nama', 'Tuban')->first();
        Kecamatan::create(['nama' => 'Bancar', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Bangilan', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Grabagan', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Jatirogo', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Jenu', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Kenduruan', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Kerek', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Merakurak', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Montong', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Palang', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Parengan', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Plumpang', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Rengel', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Semanding', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Senori', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Singgahan', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Soko', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Tambakboyo', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Tuban', 'kota_id' => $tuban->id]);
        Kecamatan::create(['nama' => 'Widang', 'kota_id' => $tuban->id]);

        // Kecamatan di Bojonegoro
        $bojonegoro = Kota::where('nama', 'Bojonegoro')->first();
        Kecamatan::create(['nama' => 'Balen', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Baureno', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Bojonegoro', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Bubulan', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Dander', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Gayam', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Gondang', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kalitidu', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kanor', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kapas', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kasiman', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kedewan', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kedungadem', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Kepohbaru', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Malo', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Margomulyo', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Ngambon', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Ngasem', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Ngraho', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Padangan', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Purwosari', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Sekar', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Sugihwaras', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Sukosewu', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Sumberejo', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Tambakrejo', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Temayang', 'kota_id' => $bojonegoro->id]);
        Kecamatan::create(['nama' => 'Trucuk', 'kota_id' => $bojonegoro->id]);
    }
}

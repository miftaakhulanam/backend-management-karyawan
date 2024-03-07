<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'phone' => +6286852348687,
            'alamat' => 'Jl. Gajah Mada',
            'jabatan' => 'Admin',
            'is_admin' => 'Super Admin',
            'photo_profil' => null,
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'phone' => +628865234875,
            'alamat' => 'Jl. KH. Hasyim Asyary',
            'jabatan' => 'admin',
            'is_admin' => 'admin',
            'photo_profil' => null,
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff'),
            'phone' => +62858512512836,
            'alamat' => 'Jl. Gatot Subroto',
            'jabatan' => 'NOC',
            'is_admin' => 'staff',
            'photo_profil' => null,
            'remember_token' => Str::random(10)
        ]);

        $this->call(KotaSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(DesaSeeder::class);
        $this->call(PaketSeeder::class);
    }
}

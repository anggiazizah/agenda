<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Shalat;
use App\Models\Dzikir;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nis' => 123456,
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('admin'),
            'kelas' => '11 RPL 1',
            'jenis_kelamin' => 'Pria'
        ]);

        Shalat::create([
            'name' => 'Sholat Subuh'
        ]);
        Shalat::create([
            'name' => 'Sholat Dzuhur'
        ]);
        Shalat::create([
            'name' => 'Sholat Ashar'
        ]);
        Shalat::create([
            'name' => 'Sholat Maghrib'
        ]);
        Shalat::create([
            'name' => 'Sholat Isya'
        ]);
        Shalat::create([
            'name' => 'Sholat Dhuha'
        ]);
        Shalat::create([
            'name' => 'Sholat Tahajud'
        ]);

        Dzikir::create([
            'name' => 'Dzikir Pagi'
        ]);
        Dzikir::create([
            'name' => 'Dzikir Sore'
        ]);
        Dzikir::create([
            'name' => 'Istigfar'
        ]);
        Dzikir::create([
            'name' => 'Shalawat'
        ]);

    }
}

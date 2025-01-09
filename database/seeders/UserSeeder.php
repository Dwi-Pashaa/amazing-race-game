<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678)
        ]);

        $admin->assignRole('Admin');

        $badiklat = User::create([
            'name' => 'Badiklat Kemhan',
            'email' => 'badiklat.kemenhan@gmail.com',
            'password' => Hash::make('password'),
            'image' => 'icon-user/badiklat.png'
        ]);

        $badiklat->assignRole('User');

        $pusdiklatTekfunghan = User::create([
            'name' => 'Pusdiklat Tekfunghan',
            'email' => 'pusdiklat.tekfunghan@gmail.com',
            'password' => Hash::make('password'),
            'image' => 'icon-user/pusdiklat-tekfunghan.png'
        ]);

        $pusdiklatTekfunghan->assignRole('User');

        $pusdiklatBahasa = User::create([
            'name' => 'Pusdiklat Bahasa',
            'email' => 'pusdiklat.bahasa@gmail.com',
            'password' => Hash::make('password'),
            'image' => 'icon-user/pusdiklat-bahasa.png'
        ]);

        $pusdiklatBahasa->assignRole('User');

        $pusdiklatJemenhan = User::create([
            'name' => 'Pusdiklat Jemenhan',
            'email' => 'pusdiklat.jemenhan@gmail.com',
            'password' => Hash::make('password'),
            'image' => 'icon-user/pusdiklat-jemenhan.png'
        ]);

        $pusdiklatJemenhan->assignRole('User');

        $pusdiklatBelaNegara = User::create([
            'name' => 'Pusdiklat BelaNegara',
            'email' => 'pusdiklat.belanegara@gmail.com',
            'password' => Hash::make('password'),
            'image' => 'icon-user/pusdiklat-belanegara.png'
        ]);

        $pusdiklatBelaNegara->assignRole('User');
    }
}

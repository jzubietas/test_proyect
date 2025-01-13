<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'), // Asegúrate de usar un hash seguro para la contraseña
        ]);

        //\App\Models\User::factory(10)->create();
    }
}

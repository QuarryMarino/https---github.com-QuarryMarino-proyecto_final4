<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BitacoraSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(EnlacesSeeder::class);
        $this->call(PaginasSeeder::class);
        $this->call(PersonasSeeder::class);
    }
}

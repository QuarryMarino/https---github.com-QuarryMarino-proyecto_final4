<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Roles::factory(20)->create();
    }
}

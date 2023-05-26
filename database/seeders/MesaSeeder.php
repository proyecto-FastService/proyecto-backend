<?php

namespace Database\Seeders;

use App\Models\Mesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    public function run()
    {
        Mesa::create([
            'id' => 0,
            'role' => 'admin',
        ]);

        Mesa::factory()->count(4)->create();
    }
}

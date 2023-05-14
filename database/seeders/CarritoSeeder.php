<?php

namespace Database\Seeders;

use App\Models\Carrito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Carrito::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MesaSeeder;
use Database\Seeders\ProductoSeeder;
use Database\Seeders\CarritoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(MesaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(CarritoSeeder::class);
    }
}

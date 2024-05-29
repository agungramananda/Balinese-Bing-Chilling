<?php

namespace Database\Seeders;

use App\Models\flavors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class flavorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        flavors::create(['flavor'=>'Vanilla']);
        flavors::create(['flavor'=>'Chocolate']);
        flavors::create(['flavor'=>'Mint']);
        flavors::create(['flavor'=>'Matcha']);
        flavors::create(['flavor'=>'Strawberry']);
        flavors::create(['flavor'=>'Blueberry']);
        flavors::create(['flavor'=>'Mango']);
        flavors::create(['flavor'=>'Taro']);
    }
}

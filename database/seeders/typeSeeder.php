<?php

namespace Database\Seeders;

use App\Models\types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        types::create(['type'=>'Cone']);
        types::create(['type'=>'Cup']);
        types::create(['type'=>'Sandwich']);
    }
}

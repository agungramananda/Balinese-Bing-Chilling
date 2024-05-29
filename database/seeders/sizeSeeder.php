<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sizes;

class sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sizes::create(['size'=>'Small']);
        sizes::create(['size'=>'Medium']);
        sizes::create(['size'=>'Large']);
    }
}

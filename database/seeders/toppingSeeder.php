<?php

namespace Database\Seeders;

use App\Models\toppings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class toppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        toppings::create(['topping'=>'Caramel Sauce']);
        toppings::create(['topping'=>'Chocolate Syrup']);
        toppings::create(['topping'=>'Whipped Cream']);
        toppings::create(['topping'=>'Chopped Nuts']);
        toppings::create(['topping'=>'Rainbow Sprinkles']);
        toppings::create(['topping'=>'Chocolate Chips']);
        toppings::create(['topping'=>'Crushed Cookies']);
        toppings::create(['topping'=>'Tropical Fruit Slices']);
        toppings::create(['topping'=>'Marshmallows']);
    }
}

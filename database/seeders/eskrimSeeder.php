<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\eskrims;

class eskrimSeeder extends Seeder
{
    public function run()
    {
        $iceCreams = [
            [
                'name' => 'Vanilla Cone',
                'type_id' => 1,
                'size_id' => 1,
                'topping_id' => null,
                'price' => '3.99',
                'description' => 'Vanilla ice cream in a crispy cone.',
                'images' => "/images/Small Vanilla Cone.png",
                'flavors' => [1]
            ],
            [
                'name' => 'Chocolate Delight',
                'type_id' => 2,
                'size_id' => 2,
                'topping_id' => 2,
                'price' => '4.99',
                'description' => 'Rich chocolate ice cream in a cup with chocolate syrup.',
                'images' => "/images/Medium Chocolate Delight.png",
                'flavors' => [2]
            ],
            [
                'name' => 'Minty Matcha Cone',
                'type_id' => 1,
                'size_id' => 3,
                'topping_id' => 3,
                'price' => '5.49',
                'description' => 'Refreshing mint and matcha ice cream in a cone with whipped cream.',
                'images' => "/images/BBC - Minty Matcha Cone Large.png",
                'flavors' => [3, 4]
            ],
            [
                'name' => 'Strawberry Dream',
                'type_id' => 2,
                'size_id' => 1,
                'topping_id' => 5,
                'price' => '3.99',
                'description' => 'Delicious strawberry ice cream in a cup with rainbow sprinkles.',
                'images' => "/images/BBC - Strawberry Dream Cup Small.png",
                'flavors' => [5]
            ],
            [
                'name' => 'Tropical Mango Sandwich',
                'type_id' => 3,
                'size_id' => 2,
                'topping_id' => null,
                'price' => '4.49',
                'description' => 'Tropical mango ice cream in a sandwich.',
                'images' => "/images/BBC - Tropical Mango Sandwich Medium.png",
                'flavors' => [7]
            ],
            [
                'name' => 'Blueberry Bliss Cone',
                'type_id' => 1,
                'size_id' => 3,
                'topping_id' => 4,
                'price' => '5.49',
                'description' => 'Sweet blueberry ice cream in a cone with chopped nuts.',
                'images'=> "/images/BBC - Blueberry Bliss Cone.png",
                'flavors' => [6]
            ],
            [
                'name' => 'Taro Cupcake',
                'type_id' => 2,
                'size_id' => 2,
                'topping_id' => 7,
                'price' => '4.99',
                'description' => 'Unique taro ice cream in a cup with crushed cookies.',
                'images' => "/images/BBC - Taro Cupcake.png",
                'flavors' => [8]
            ],
            [
                'name' => 'Double Chocolate Chip Cone',
                'type_id' => 1,
                'size_id' => 1,
                'topping_id' => 6,
                'price' => '4.49',
                'description' => 'Decadent chocolate ice cream in a cone with chocolate chips.',
                'images' => "/images/BBC - Double Chocolate .png",
                'flavors' => [2]
            ],
            [
                'name' => 'Matcha Heaven',
                'type_id' => 2,
                'size_id' => 3,
                'topping_id' => 9,
                'price' => '5.99',
                'description' => 'Creamy matcha ice cream in a cup with marshmallows.',
                'images'=>"images/BBC - Matcha Heaven.png",
                'flavors' => [4]
            ],
            [
                'name' => 'Vanilla Strawberry Sandwich',
                'type_id' => 3,
                'size_id' => 2,
                'topping_id' => null,
                'price' => '4.99',
                'description' => 'Classic vanilla and strawberry ice cream in a sandwich.',
                'images' => "/images/BBC - Vanilla Strawberry Sandwich.png",
                'flavors' => [1, 5]
            ],
            [
                'name' => 'Caramel Nut Cone',
                'type_id' => 1,
                'size_id' => 2,
                'topping_id' => 1,
                'price' => '4.99',
                'description' => 'Vanilla ice cream in a cone with caramel sauce and chopped nuts.',
                'images' => "/images/BBC - Caramel Nut Cone.png",
                'flavors' => [1]
            ],
            [
                'name' => 'Mango Madness Cup',
                'type_id' => 2,
                'size_id' => 1,
                'topping_id' => 8,
                'price' => '4.49',
                'description' => 'Refreshing mango ice cream in a cup with tropical fruit slices.',
                'images' => "/images/BBC - Mango Madness Cup.png",
                'flavors' => [7]
            ],
            [
                'name' => 'Chocolate Mint Cone',
                'type_id' => 1,
                'size_id' => 3,
                'topping_id' => 2,
                'price' => '5.49',
                'description' => 'Cool mint and rich chocolate ice cream in a cone with chocolate syrup.',
                'images' => "/images/BBC - Chocolate Mint Cone.png",
                'flavors' => [2, 3]
            ],
            [
                'name' => 'Blueberry Swirl Cup',
                'type_id' => 2,
                'size_id' => 2,
                'topping_id' => 3,
                'price' => '4.99',
                'description' => 'Delicious blueberry ice cream in a cup with whipped cream.',
                'images'=>"/images/BBC - Blueberry Swirl Cup.png",
                'flavors' => [6]
            ],
            [
                'name' => 'Matcha Cookie Sandwich',
                'type_id' => 3,
                'size_id' => 2,
                'topping_id' => null,
                'price' => '4.49',
                'description' => 'Smooth matcha ice cream in a sandwich.',
                'images' => "/images/BBC - Matcha Cookie Sandwich.png",
                'flavors' => [4]
            ],
            [
                'name' => 'Strawberry Delight Cone',
                'type_id' => 1,
                'size_id' => 1,
                'topping_id' => 7,
                'price' => '4.49',
                'description' => 'Fresh strawberry ice cream in a cone with crushed cookies.',
                'images'=>"/images/BBC - Strawberry Delight Cone.png",
                'flavors' => [5]
            ],
            [
                'name' => 'Minty Marshmallow Cup',
                'type_id' => 2,
                'size_id' => 3,
                'topping_id' => 9,
                'price' => '5.49',
                'description' => 'Cool mint ice cream in a cup with marshmallows.',
                'images'=>"/images/BBC - Minty Marshmallow Cup.png",
                'flavors' => [3]
            ],
            [
                'name' => 'Vanilla Berry Cone',
                'type_id' => 1,
                'size_id' => 2,
                'topping_id' => 5,
                'price' => '4.99',
                'description' => 'Vanilla and blueberry ice cream in a cone with rainbow sprinkles.',
                'images'=>"/images/BBC - Vanilla Berry Cone.png",
                'flavors' => [1, 6]
            ],
            [
                'name' => 'Chocolate Mango Sandwich',
                'type_id' => 3,
                'size_id' => 3,
                'topping_id' => null,
                'price' => '5.49',
                'description' => 'Exotic chocolate and mango ice cream in a sandwich.',
                'images'=>"/images/BBC - Chocolate Mango Sandwich.png",
                'flavors' => [2, 7]
            ],
            [
                'name' => 'Taro Nut Delight',
                'type_id' => 2,
                'size_id' => 2,
                'topping_id' => 4,
                'price' => '4.99',
                'description' => 'Rich taro ice cream in a cup with chopped nuts.',
                'images'=>"/images/BBC - Taro Nut Delight.png",
                'flavors' => [8]
            ],
        ];

        foreach ($iceCreams as $iceCream) {
            $createdIceCream = eskrims::create([
                'name' => $iceCream['name'],
                'type_id' => $iceCream['type_id'],
                'size_id' => $iceCream['size_id'],
                'topping_id' => $iceCream['topping_id'],
                'price' => $iceCream['price'],
                'description' => $iceCream['description'],
                'images'=> $iceCream['images'],
            ]);

            $createdIceCream->flavor()->sync($iceCream['flavors']);
        }
    }
}

?>

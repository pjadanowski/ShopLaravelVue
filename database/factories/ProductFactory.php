<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(60),
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->randomFloat(2, 5, 100),
        'inventory' => $faker->biasedNumberBetween(1, 100, 'cos'),
        'shipping' => $faker->biasedNumberBetween(1, 15, 'cos')
    ];
});

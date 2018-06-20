<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->text(60);
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->randomFloat(2, 5, 100),
        'inventory' => $faker->biasedNumberBetween(1, 100, 'cos'),
        'shipping' => $faker->biasedNumberBetween(1, 15, 'cos')
    ];
});

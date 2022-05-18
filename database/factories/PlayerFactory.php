<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'address' => $faker->address,
        'description' => $faker->paragraph(50),
        'retired' => $faker->boolean()
    ];
});

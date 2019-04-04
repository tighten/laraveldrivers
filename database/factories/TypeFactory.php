<?php

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
    ];
});

<?php

use App\Driver;
use App\Type;
use Faker\Generator as Faker;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'url' => $faker->url,
        'type_id' => function () {
            return factory(Type::class)->create()->id;
        },
    ];
});

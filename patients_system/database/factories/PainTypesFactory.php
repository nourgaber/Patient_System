<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PainTypes;
use Faker\Generator as Faker;

$factory->define(PainTypes::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'specialization_id' => function () {
            return App\Specialization::inRandomOrder()->first()->id;
        },
    ];

});

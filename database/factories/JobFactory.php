<?php

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'details' => $faker->text(100),
        'details' => $faker->text(100),
        'x' => $faker->randomFloat(1, 0, 10),
        'y' => $faker->randomFloat(1, 0, 10),
        'completed' => false
        ];
});

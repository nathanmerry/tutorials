<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artical;
use Faker\Generator as Faker;

$factory->define(Artical::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

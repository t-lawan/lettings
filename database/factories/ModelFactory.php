<?php


$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->freeEmail,
        'password' => bcrypt('thomas'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Flyer::class, function (Faker\Generator $faker) {
    return [
        'user_id' => rand(1,2),
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'post_code' => $faker->postcode,
        'country' => $faker->country,
        'price' => $faker->numberBetween(10000,50000),
        'description' => $faker->paragraph($nbSentences = 2$, $variableNbSentences = true)
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $isExpert = rand(0,1);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'photo' => $faker->imageUrl(),
        'isExpert' => $isExpert,
        'position'=> ($isExpert == 1) ? $faker->catchPhrase : null,
        'rate'=> ($isExpert == 1) ? $faker->randomDigit : null,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => md5(now().rand(1,100000)),
    ];
});

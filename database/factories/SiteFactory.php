<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Site;
use Faker\Generator as Faker;

$factory->define(Site::class, function (Faker $faker) {
    $senders = \App\User::all()->pluck('id')->toArray();
    return [
        'link' => $faker->url,
        'img' =>  $faker->imageUrl($width = 345, $height = 210),
        'about' => $faker->paragraph(2),
        'rate' => $faker->randomFloat(1,0,10),
        'status' => "Номинант",
        'nomination' =>  $faker->slug,
        'developer' => $faker->name,
        'develop_city' => $faker->city,
        'launch_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'owner' => $faker->company,
        'votes' => rand(0,1000),
        'watchers' => rand(0,1000),
        'sender_id' => $senders[array_rand($senders)],
    ];
});

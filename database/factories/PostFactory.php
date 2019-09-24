<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $authors = \App\User::all()->pluck('id')->toArray();
    return [
        'img' =>  $faker->imageUrl($width = 345, $height = 210),
        'title' =>  $faker->sentence(),
        'author_id' => $authors[array_rand($authors)],
        'watch' => rand(0,1000),
        'rate' => rand(0,1000),
        'tags' => $faker->words(3,true),
        'body' => $faker->paragraph(20),
    ];
});

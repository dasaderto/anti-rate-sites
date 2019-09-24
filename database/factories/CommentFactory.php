<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $authors = \App\User::all()->pluck('id')->toArray();
    return [
        'post_id'=> rand(1,20),
        'parent_id'=> null,
        'author_id'=> $authors[array_rand($authors)],
        'body' => $faker->sentence(10),
    ];
});

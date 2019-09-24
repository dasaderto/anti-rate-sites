<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\SiteComment;
use Faker\Generator as Faker;

$factory->define(SiteComment::class, function (Faker $faker) {
    $authors = \App\User::all()->pluck('id')->toArray();
    return [
        'site_id'=> rand(1,50),
        'parent_id'=> null,
        'author_id'=> $authors[array_rand($authors)],
        'body' => $faker->sentence(10),
    ];
});

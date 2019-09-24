<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ExpertComment;
use App\Models\Site;
use Faker\Generator as Faker;

$factory->define(ExpertComment::class, function (Faker $faker) {
    $experts = \App\User::where('isExpert',1)->pluck('id')->toArray();
    $sites = Site::all()->pluck('id')->toArray();
    return [
        'expert_id' => $experts[array_rand($experts)],
        'site_id' => $sites[array_rand($sites)],
        'comment' => $faker->sentence(10),
        'isPositive'=> rand(0,1),
    ];
});

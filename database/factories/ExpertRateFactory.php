<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ExpertRate;
use Faker\Generator as Faker;

$factory->define(ExpertRate::class, function (Faker $faker) {
    $sites = \App\Models\Site::all()->pluck('id')->toArray();
    $experts = \App\User::where('isExpert',1)->pluck('id')->toArray();
    return [
        'expert_id' => $experts[array_rand($experts)],
        'site_id' => $sites[array_rand($sites)],
        'expert_rate'=> $faker->randomFloat(1,0,10)
    ];
});

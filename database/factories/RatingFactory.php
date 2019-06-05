<?php

use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'book_id' => random_int(\DB::table('books')->min('id'), \DB::table('books')->max('id')),
        'rate'=>$faker->numberBetween(0,5),//
    ];
});

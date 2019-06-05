<?php

use Faker\Generator as Faker;

$factory->define(App\Favorite::class, function (Faker $faker) {
    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'book_id' => random_int(\DB::table('books')->min('id'), \DB::table('books')->max('id')),
        'favorite'=>$faker->boolean(),//
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'book_id' => random_int(\DB::table('books')->min('id'), \DB::table('books')->max('id')),
        'parent_id'=>$faker->numberBetween(1,20) ,
        'description'=>$faker->text(60),
        'title'=>$faker->title(),
        'rate'=>$faker->numberBetween(0,5),//
    ];
});

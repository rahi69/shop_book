<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1,100) ,
        'book_id'=>$faker->numberBetween(1,100) ,
        'parent_id'=>$faker->numberBetween(1,20) ,
        'description'=>$faker->text(60),//
    ];
});

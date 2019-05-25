<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'name'=>$faker->text(10) ,
        'e_name'=>$faker->text(10),
        'author'=>$faker->name(),
        'publisher'=>$faker->name(),
        'speaker'=>$faker->name(),
        'description'=>$faker->text(100),
        'review'=>$faker->text(20),
        'isbn'=>$faker->numberBetween(1,200),
        'path'=>$faker->text(10),
        'category_id'=>random_int(\DB::table('categories')->min('id'), \DB::table('categories')->max('id')),
        'price'=>$faker->numberBetween(20000,180000),
        //
    ];
});

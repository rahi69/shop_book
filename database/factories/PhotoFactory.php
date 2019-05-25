<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'photo_id'=>$faker->numberBetween(1,100) ,
        'photo_type'=>$faker->text(6),
        'file'=>$faker->text(10),//
    ];
});

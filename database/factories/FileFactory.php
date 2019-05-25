<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
    return [
        'file_id'=>$faker->numberBetween(1,100),
        'file_type'=>$faker->text(10),
        'name'=>$faker->text(10),//
    ];
});

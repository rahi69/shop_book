<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'parent_id'=>$faker->numberBetween(1,20) ,
        'lft'=>$faker->numberBetween(1,30),
        'rgt'=>$faker->numberBetween(1,40),
        'depth'=>$faker->numberBetween(1,100),
        'name'=>$faker->text(10), //
    ];
});

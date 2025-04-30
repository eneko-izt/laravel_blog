<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraphs(1, true),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;

$factory->define(Article::class, function (Faker $faker) {
    $randomContent = "";
    do {
        $randomContent = $randomContent . $faker->text(200) . " ";
    }
    while (strlen($randomContent) < 2000);

    $title = $faker->unique()->text(20);

    return [
        'title' => $title,
        'summary' => $faker->text(60),
        'content' => $randomContent,
        'slug' => Str::slug($title, '-'),
        'user_id' => User::all()->random()->id
    ];
});

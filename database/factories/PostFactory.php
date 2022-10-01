<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;









$factory->define(Post::class, function (Faker $faker) {
    
    $title = $faker->realText(mt_rand(10, 40));
    $short_title = mb_strlen($title) > 30 ? mb_substr($title, 0, 30) . '...': $title;
    $created = $faker->dateTimeBetween('-30 days', '-1 days');
    
    
    return [
        
        'title' => $title,
        'short_title' => $short_title,
        'author_id' => mt_rand(1, 4),
        'descr' => $faker->realText(mt_rand(100, 500)),
        'created_at' => $created,
        'updated_at' => $created,



    ];
});

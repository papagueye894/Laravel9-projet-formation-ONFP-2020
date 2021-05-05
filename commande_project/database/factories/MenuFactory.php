<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'titre' => $faker->word,
        'description' => $faker->text,
        'categorie' => $faker->randomElement($array = array('fast-food', 'local', 'exotique')),
        'image_url' => $faker->imageUrl(300, 300, 'food'),
        'image_name' => $faker->word,
        'image_driver' => $faker->word,
    ];
});

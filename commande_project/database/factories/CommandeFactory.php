<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Commande::class, function (Faker $faker) {
    return [
        'clients_id' => factory(App\Client::class),
        'menus_id' => factory(App\Menu::class),
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'adresse' => $faker->word,
    ];
});

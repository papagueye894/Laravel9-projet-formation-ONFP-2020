<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
use Illuminate\Support\Str;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => SnNmG::getName(),
        'prenom' => SnNmg::getFirstName(),
        'telephone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'role' => $faker->randomElement($array=array('gestionnaire','client','administrateur')),
        'email_verified_at' => $faker->dateTime(),
        'password' => bcrypt('passer'),
        'remember_token' => Str::random(10),
    ];
});

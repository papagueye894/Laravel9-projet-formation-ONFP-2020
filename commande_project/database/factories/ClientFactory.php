<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'telephone' => $faker->word,
        'users_id' =>function(){
            $user= factory(App\User::class)->create();
	    $user->role="client";
	    $user->save();
            return $user->id;
        }
    ];
});

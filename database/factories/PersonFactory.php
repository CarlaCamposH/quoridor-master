<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Person;

$factory->define(Person::class, function (Faker $faker) {
    return [
      'nickname' => $this->faker->name,
      'email' => $this->faker->email
    ];
});

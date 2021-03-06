<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\WeatherForecast::class, function (Faker $faker) {
    $city = \App\City::inRandomOrder()->first();
    return [
        'humidity' => $faker->randomFloat(2,1,100),
        'temp'     => $faker->randomFloat(2,1,100),
        'date'     => $faker->date(),
        'city_id'  => !is_null($city) ? $city->id : factory(\App\City::class)->create()->id,
    ];
});

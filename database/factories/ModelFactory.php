<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'name' => $faker->name,
    	'username' => $faker->word,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => $faker->numberBetween($min = 1, $max = 3),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
    	'title' => $faker->word,
    ];
});
$factory->define(App\Read::class, function (Faker\Generator $faker) {
    return [
    	'lesson_id' => App\Lesson::all()->random()->id,
    	'user_id' => App\User::all()->random()->id,
    	'page_number' => $faker->numberBetween($min=1, $max = 10),
    ];
});

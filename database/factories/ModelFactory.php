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
    $arrayRole = ['student', 'admin', 'teacher'];

    return [
    	'name' => $faker->name,
    	'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => $arrayRole[rand(0,2)],
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
    	'user_id' => App\User::all()->random()->id,
        'maincategory_id' => App\Maincategory::all()->random()->id,
        'title' => $faker->sentence(4),
    ];
});
$factory->define(App\Read::class, function (Faker\Generator $faker) {
    return [
    	'lesson_id' => App\Lesson::all()->random()->id,
    	'user_id' => App\User::all()->random()->id,
    	'page_read' => $faker->numberBetween($min=1, $max = 10),
    ];
});

$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
    	'page_number' => $faker->numberBetween($min=1, $max = 10),
    	'lesson_id' => App\Lesson::all()->random()->id,
    	'title' => $faker->sentence(4),
    	'content' => $faker->paragraph(6),
    ];
});


$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word(1),
    ];
});

$factory->define(App\Lessontag::class, function (Faker\Generator $faker) {
    return [
        'tag_id' => App\Tag::all()->random()->id,
        'lesson_id' => App\Lesson::all()->random()->id,
        
    ];
});
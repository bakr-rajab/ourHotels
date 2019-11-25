<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Hotel;
use App\Room;
use App\Rate;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('20150012'), // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => rand(3,5),
        'city_id' => rand(1,10),
    ];
});


$factory->define(Rate::class, function (Faker $faker) {
    return [
        'star' => rand(0,5),
        'user_id'=>User::all()->random()->id,
        'hotel_id'=>Hotel::all()->random()->id,
    ];
});

$factory->define(Room::class, function (Faker $faker) {
    return [
        'hotel_id'=>Hotel::all()->random()->id,
        'max_adults' => rand(3,5),
        'far'=>rand(1000,4000),
        'from'=>$faker->dateTime,
        'to'=>$faker->dateTime,
        'activities' =>json_encode(["key" => $faker->randomNumber(),"value" => $faker->asciify('swiming')]),
    ];
});


<?php

use Faker\Generator as Faker;

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

$factory->define(App\Organization::class, function (Faker $faker)
{
    return
    [
        'organization_name' => $faker->company,
        'address'           => $faker->streetAddress,
        'city'              => $faker->city,
        'state'             => $faker->randomElement( array_keys( Config::get('constants.states') ) ),
        'zip'               => $faker->randomNumber( 5 ),
        'status'            => $faker->boolean
    ];
});

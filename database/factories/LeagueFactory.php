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

$factory->define(App\League::class, function (Faker $faker)
{
    return
    [
        'organization_id' => function ()
        {
            return factory(App\Organization::class)->create()->id;
        },
        'league_name'     => $faker->company,
        'status'          => $faker->boolean
    ];
});

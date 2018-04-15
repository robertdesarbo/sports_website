<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        factory(App\Organization::class, 10 )->create()->each(function ($organization)
        {
            $organization->league()->saveMany( factory( App\League::class, 10 )->make() );
        });

    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create();
        factory(App\Lesson::class, 50)->create();
        factory(App\Read::class, 20)->create();
        factory(App\Page::class, 40)->create();
    }
}

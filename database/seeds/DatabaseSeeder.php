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
        App\Maincategory::create([
                   'name' => "math"
        ]);

        App\Maincategory::create([
                   'name' => "mapeh"
        ]);

        App\Maincategory::create([
                   'name' => "science"
        ]);

        App\Maincategory::create([
                   'name' => "language"
        ]);

        App\Maincategory::create([
                   'name' => "programming"
        ]);

        factory(App\User::class, 300)->create();
        factory(App\Lesson::class, 30)->create();
        factory(App\Read::class, 1000)->create();
        factory(App\Page::class, 500)->create();
        factory(App\Tag::class, 200)->create();
        factory(App\Lessontag::class, 500)->create();


    }
    //     public function run()
    // {
    //     App\Maincategory::create([
    //                'name' => "math"
    //     ]);

    //     App\Maincategory::create([
    //                'name' => "mapeh"
    //     ]);

    //     App\Maincategory::create([
    //                'name' => "science"
    //     ]);

    //     App\Maincategory::create([
    //                'name' => "language"
    //     ]);

    //     App\Maincategory::create([
    //                'name' => "programming"
    //     ]);

    //     factory(App\User::class, 30)->create();
    //     factory(App\Lesson::class, 3)->create();
    //     factory(App\Read::class, 100)->create();
    //     factory(App\Page::class, 50)->create();
    //     factory(App\Tag::class, 20)->create();
    //     factory(App\Lessontag::class, 50)->create();


    // }
}

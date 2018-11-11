<?php

use Illuminate\Database\Seeder;
use App\Dvd;
use App\Tag;

class DvdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dvd1 = create(Dvd::class, ['title' => 'Titanic']);
        $dvd2 = create(Dvd::class, ['title' => 'Vingadores']);
        $dvd3 = create(Dvd::class, ['title' => 'Tarzan']);
        $dvd4 = create(Dvd::class, ['title' => 'Rei Leão']);

        $tag1 = Tag::where('title', 'Disney')->first();
        $tag2 = Tag::where('title', 'Aventura')->first();
        $tag3 = Tag::where('title', 'Oscar')->first();
        $tag4 = Tag::where('title', 'Amor')->first();
        $tag5 = Tag::where('title', 'Ousadia')->first();

        $dvd1->tags()->attach($tag3);
        $dvd1->tags()->attach($tag4);
        $dvd2->tags()->attach($tag5);
        $dvd3->tags()->attach($tag1);
        $dvd3->tags()->attach($tag2);
        $dvd3->tags()->attach($tag4);
        $dvd4->tags()->attach($tag1);
        $dvd4->tags()->attach($tag2);


    }
}

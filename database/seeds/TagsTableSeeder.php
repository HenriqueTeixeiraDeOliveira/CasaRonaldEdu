<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        create(Tag::class, ['title' => 'Disney']);
        create(Tag::class, ['title' => 'Aventura']);
        create(Tag::class, ['title' => 'Oscar']);
        create(Tag::class, ['title' => 'Amor']);
        create(Tag::class, ['title' => 'Ousadia']);
    }
}

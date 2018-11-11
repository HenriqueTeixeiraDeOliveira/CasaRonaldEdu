<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Tag;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = Tag::where('id', 1)->first();
        $tag2 = Tag::where('id', 2)->first();
        $tag3 = Tag::where('id', 3)->first();
        $tag4 = Tag::where('id', 4)->first();
        $tag5 = Tag::where('id', 5)->first();

        create(Book::class, ['title' => 'Dois a Dois']);
        create(Book::class, ['title' => 'A culpa é das estrelas']);
        create(Book::class, ['title' => 'Garotos da Fuzarca']);
        create(Book::class, ['title' => 'Diário de uma Paixão']);
        create(Book::class, ['title' => 'A menina que roubava livros']);
        create(Book::class, ['title' => 'O astronauta sem regime']);
        create(Book::class, ['title' => 'O pequeno príncipe']);
        create(Book::class, ['title' => 'Poliana']);
    }
}

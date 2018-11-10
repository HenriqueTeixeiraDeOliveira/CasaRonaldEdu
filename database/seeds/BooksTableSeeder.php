<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

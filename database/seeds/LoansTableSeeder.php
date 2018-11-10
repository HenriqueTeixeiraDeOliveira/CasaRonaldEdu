<?php

use Illuminate\Database\Seeder;
use App\Loan;
use App\Book;
use App\Dvd;
use Carbon\Carbon;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loan1 = create(Loan::class, ['user_id' => 2, 'volunteer_before' => 'Henrique', 'loaned_at' => Carbon::now()->subDays(5)]);
        $loan2 = create(Loan::class, ['user_id' => 3, 'volunteer_before' => 'Jéssica', 'loaned_at' => Carbon::now()->subDays(3)]);
        create(Loan::class, ['user_id' => 4, 'volunteer_before' => 'Dirce', 'loaned_at' => Carbon::now()->subDays(1)]);
        create(Loan::class, ['user_id' => 5, 'volunteer_before' => 'Angela', 'loaned_at' => Carbon::now()->subDays(1)]);

        $book1 = Book::where('id', '1')->first();
        $book2 = Book::where('id', '2')->first();
        $book3 = Book::where('id', '3')->first();

        $dvd1 = Dvd::where('id', '1')->first();
        $dvd2 = Dvd::where('id', '2')->first();
        $dvd3 = Dvd::where('id', '3')->first();

        $loan1->books()->attach($book1);
        $loan1->books()->attach($book2);
        $loan1->dvds()->attach($dvd3);

        $loan2->dvds()->attach($dvd1);
        $loan2->dvds()->attach($dvd2);
        $loan2->books()->attach($book3);
    }
}



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
        create(Loan::class, [
            'user_id' => 2, 'loanable_id' => 1, 'loanable_type' => 'book',
            'volunteer_before' => 'Henrique', 'loaned_at' => Carbon::now()->subDays(5)
        ]);
        create(Loan::class, [
            'user_id' => 2, 'loanable_id' => 1, 'loanable_type' => 'dvd',
            'volunteer_before' => 'Henrique', 'loaned_at' => Carbon::now()->subDays(5)
        ]);
        create(Loan::class, [
            'user_id' => 2, 'loanable_id' => 2, 'loanable_type' => 'dvd',
            'volunteer_before' => 'Henrique', 'loaned_at' => Carbon::now()->subDays(5)
        ]);
        create(Loan::class, [
            'user_id' => 3, 'loanable_id' => 3, 'loanable_type' => 'book',
            'volunteer_before' => 'Jéssica', 'loaned_at' => Carbon::now()->subDays(5)
        ]);
        create(Loan::class, [
            'user_id' => 3, 'loanable_id' => 3, 'loanable_type' => 'dvd',
            'volunteer_before' => 'Jéssica', 'loaned_at' => Carbon::now()->subDays(5)
        ]);
    }
}



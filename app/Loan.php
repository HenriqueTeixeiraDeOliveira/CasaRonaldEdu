<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);       // Get the user that received the loan
    }

    public function books()
    {
        return $this->morphedByMany(Book::class, 'loanable')->withTimestamps();     // Get all of the books that were loaned
    }

    public function dvds()
    {
        return $this->morphedByMany(Dvd::class, 'loanable')->withTimestamps();      // Get all of the dvds that were loaned
    }
}

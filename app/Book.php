<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function loans()
    {
        return $this->morphToMany(Loan::class, 'loanable');         // Get all of the loans for the book
    }
}

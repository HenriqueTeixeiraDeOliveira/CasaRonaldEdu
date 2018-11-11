<?php

namespace App\Traits;
use App\Loan;


trait Loanable
{
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');         // Get all of the loans for the book
    }

    public function getIsAvailableAttribute()
    {
        if ($this->loans->isEmpty()) {     // Check if the loanable has any loans
            return true;  // Return true if the loanable has never been loaned, which means it is available
        }
        else {
            return $this->loans()->orderBy('loaned_at', 'desc')->first()->returned_at == null ? false : true ;
            // Check if the last loan has been returned
        }
    }
}
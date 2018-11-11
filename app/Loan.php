<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Loan extends Model
{
    use Actionable;

    protected $casts = [
        'loaned_at' => 'datetime',
        'returned_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);       // Get the user that received the loan
    }

    public function loanable()
    {
        return $this->morphTo();     // Get all of the things that were loaned
    }

    public function getWasReturnedAttribute()
    {
        return $this->returned_at == null ? false : true;
    }
}

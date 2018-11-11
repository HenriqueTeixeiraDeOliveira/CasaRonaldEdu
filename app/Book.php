<?php

namespace App;

use App\Traits\Loanable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Book extends Model
{
    use Loanable, Actionable;

    protected $appends = ['isAvailable'];
}

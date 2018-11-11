<?php

namespace App;

use App\Traits\Loanable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Dvd extends Model
{
    use Loanable, Actionable;

    protected $appends = ['isAvailable'];

    public function tags() {
        return $this->morphToMany(Tag::class,'taggable')->withTimestamps();
    }
}

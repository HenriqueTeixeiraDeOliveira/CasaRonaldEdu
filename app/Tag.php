<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function books()
    {
        return $this->morphedByMany(Book::class, 'taggable')->withTimestamps();
    }

    public function dvds()
    {
        return $this->morphedByMany(Dvd::class, 'taggable')->withTimestamps();
    }
}

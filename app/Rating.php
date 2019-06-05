<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class );
    }

    public function Book()
    {
        return $this->belongsTo(Book::class );
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use SoftDeletes;
    public function User()
    {
        return $this->belongsTo(User::class );
    }

    public function Book()
    {
        return $this->belongsTo(Book::class );
    }
}

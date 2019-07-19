<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    protected $fillable = [
       'user_id','book_id','rate',
    ];
    public function User()
    {
        return $this->belongsTo(User::class );
    }

    public function Book()
    {
        return $this->belongsTo(Book::class );
    }
}

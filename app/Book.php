<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function book()
    {
        return $this->belongsTo(Category::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class,'photo');
    }
    public function files()
    {
        return $this->morphMany(File::class,'fileable');
    }
}

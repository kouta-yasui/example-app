<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['book_id', 'rating'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}


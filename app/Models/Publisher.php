<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

}

<?php

namespace App\Models;

use App\Models\Publisher;
use App\Models\BookCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function category()
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function bookcase()
    {
        return $this->belongsTo(BookCase::class);
    }
}

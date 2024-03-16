<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id',
        'name'
    ];

    public function state(){
        return $this->BelongsTo(States::class);
    }

    public function Employee(){
        return $this->hasMany(Employees::class,'country_id');
    }
}

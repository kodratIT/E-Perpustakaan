<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function state(){
        return $this->hasMany(States::class, 'country_id');
    }

    public function Employee(){
        return $this->hasMany(Employees::class,'country_id');
    }
}

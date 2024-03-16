<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name'
    ];

    public function country(){
        return $this->BelongsTo(Countries::class);
    }

    public function cities(){
        return $this->hasMany(Cities::class,'state_id');
    }

    public function Employee(){
        return $this->hasMany(Employees::class,'country_id');
    }
}

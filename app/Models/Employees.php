<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    public function country(){
        return $this->BelongsTo(Countries::class);
    }
    public function state(){
        return $this->BelongsTo(States::class);
    }
    public function city(){
        return $this->BelongsTo(Cities::class);
    }
    public function departement(){
        return $this->BelongsTo(Departements::class);
    }
}

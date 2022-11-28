<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function Trainee(){
        return $this->hasMany(Trainee::class);
     }
}

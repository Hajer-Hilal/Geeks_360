<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function Course(){
        return $this->belongsTo(Course::class);
     }

     public function University(){
        return $this->belongsTo(University::class);
     }
}

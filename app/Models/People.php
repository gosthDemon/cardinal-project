<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function Administrator(){
        return $this->hasOne(Administrator::class);
    }
    public function Teachers(){
        return $this->hasOne(Teacher::class);
    }
    public function Tutors(){
        return $this->hasOne(Tutor::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}

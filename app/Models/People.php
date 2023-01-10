<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'peoples';
    protected $fillable = ['user_id','picture_profile','names','paternal_lastname','maternal_lastname','birthday','birthday','sex','direction','phone','created_at','updated_at','updated_at'];

    public function administrators(){
        return $this->hasMany(Administrator::class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function tutors(){
        return $this->hasMany(Tutor::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function users(){
        return $this->belongsTo(User::class, "user_id");
    }
}

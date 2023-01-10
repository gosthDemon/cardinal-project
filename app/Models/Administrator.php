<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = ['id','license','people_id','created_at','updated_at'];

    public function peoples(){
        return $this->belongsTo(People::class,"people_id");
    }
}

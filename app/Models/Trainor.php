<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainor extends Model
{
    use HasFactory;

    public function courses() {
        return $this->hasMany(Course::class);
    }


    public function user() {
        return $this->belongsTo(User::class);
    }
}

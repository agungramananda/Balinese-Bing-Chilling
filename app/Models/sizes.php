<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizes extends Model
{
    use HasFactory;

    public function eskrim(){
        return $this->hasMany(eskrims::class)->withPivot('price')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class types extends Model
{
    use HasFactory;

    public function esKrim (){
        return $this->hasMany(eskrims::class);
    }
}

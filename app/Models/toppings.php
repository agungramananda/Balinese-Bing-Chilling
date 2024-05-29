<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class toppings extends Model
{
    use HasFactory;

    public function eskrim(){
        return $this->hasMany(eskrims::class)->withTimestamps();
    }
}

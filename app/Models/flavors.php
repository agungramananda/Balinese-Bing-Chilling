<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flavors extends Model
{
    use HasFactory;

    public function eskrim(){
        return $this->belongsToMany(eskrims::class, 'eskrims_flavors', 'flavors_id', 'eskrims_id');
    }
}

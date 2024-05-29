<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskrims extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(types::class);
    }
    
    public function size(){
        return $this->belongsTo(sizes::class);
    }

    public function flavor(){
        return $this->belongsToMany(flavors::class, 'eskrims_flavors', 'eskrims_id', 'flavors_id');
    }

    public function topping(){
        return $this->belongsTo(toppings::class);
    }
}

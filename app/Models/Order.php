<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function dishes(){
        return $this->belongsTo('App\Models\Dish'); 
    }

    public function tables(){
        return $this->belongsTo('App\Models\Tables'); 
    }

    
}

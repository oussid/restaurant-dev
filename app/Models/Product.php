<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\TodaySpecials;

class Product extends Model
{
    use HasFactory;
    public function category(){
        return $this->hasOne(Category::class,'products_category');
    }
    public function todaySpecials(){
        return $this->belongsTo(TodaySpecials::class, 'product_id');
    }
}

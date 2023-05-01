<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Category;
use App\Models\TodaySpecials;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'price', 'description', 'image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function todaySpecials(){
        return $this->belongsTo(TodaySpecials::class);
    }


    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity');
    }
}

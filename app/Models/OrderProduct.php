<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable=[
        "order_id",
        "product_id",
        "quantity"
    ];
    protected $table = 'order_product';

    public function order(){
        $this->belongsTo(Order::class,'order_id');
    }
}

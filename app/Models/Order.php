<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        "customer_id",
        "delivery_man_id",
        "order_number",
        "total",
        "status",
        "delivery_type"
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    
    public function deliveryMan()
    {
        return $this->belongsTo(User::class, 'delivery_man_id');
    }

}

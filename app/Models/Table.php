<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'floor', 'position'];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}

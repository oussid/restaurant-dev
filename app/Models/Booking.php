<?php

namespace App\Models;

use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
    'table_id',
    'booking_date',
    'booking_time',
    'booking_type',
    'guests_number',
    'contact_name',
    'contact_email',
    'contact_mobile',
    'special_request'
    ];


    public function table()
    {
        return $this->belongsTo(Table::class);
    }

}

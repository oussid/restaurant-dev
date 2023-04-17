<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}

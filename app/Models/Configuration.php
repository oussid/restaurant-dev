<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $table = 'configuration';

    protected $fillable = ['name', 'logo', 'email', 'address', 'city', 'primary_color', 'secondary_color', 'phone', 'email', 'slogan', 'description'];
}

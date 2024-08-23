<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['model_name', 'price', 'used', 'km', 'ports_number', 'cubic_capacity', 'transmission', 'power_supply', 'image_path'];
}

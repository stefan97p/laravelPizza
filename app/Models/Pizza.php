<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $casts = [
        'toppings' => 'array'
    ];

    protected $fillable = [
        'type',
        'base',
        'name',
        'address',
        'toppings',
    ];

    use HasFactory;
}

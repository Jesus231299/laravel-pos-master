<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'mark',
        'description',
        'image',
        'barcode',
        'price',
        'quantity',
        'status'
    ];
}

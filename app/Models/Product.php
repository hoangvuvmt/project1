<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $filable = [
        'product_id',
        'order_id',
        'product_name',
        'Price',
        'category_id',
        'product_code',
        'product_weight',
        'quantity'
    ];
}

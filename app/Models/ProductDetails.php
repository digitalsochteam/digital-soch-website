<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $table = 'product_details';

    protected $fillable = [
        'product_id',
        'category',
        'subcategory',
        'product',
        'product_details',
        'position',
    ];
}

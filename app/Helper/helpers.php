<?php

use App\Models\ProductDetails;

function getCategoryList()
{
    return $categories = ProductDetails::select('category')->distinct()->pluck('category');
}

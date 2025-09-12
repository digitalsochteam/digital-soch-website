<?php

use App\Models\ProductDetails;
use Illuminate\Support\Facades\Log;

function getCategoryList()
{
    $data = ProductDetails::get();

    $tree = [];
    // add id as well to the product

    foreach ($data as $row) {
        $id = $row->id;
        $category = $row->category;
        $subcategory = $row->subcategory;
        $product = $row->product;

        // Ensure category exists
        if (!isset($tree[$category])) {
            $tree[$category] = [
                'id' => $id,
                'category' => $category,
                'subcategories' => []
            ];
        }

        // Ensure subcategory exists under category
        if (!isset($tree[$category]['subcategories'][$subcategory])) {
            $tree[$category]['subcategories'][$subcategory] = [
                'subcategory' => $subcategory,
                'products' => []
            ];
        }

        // Add product
        $tree[$category]['subcategories'][$subcategory]['products'][] = $product;
    }

    // Fix array keys for JSON response
    $tree = array_map(function ($cat) {
        $cat['subcategories'] = array_values(array: $cat['subcategories']);
        return $cat;
    }, $tree);


    // Log::info(message: 'Category List', $tree); // Log the data for debugging

    return array_values($tree); // ✅ return as array
}

function getProductById($id)
{
    $product = ProductDetails::find($id);
    if (!$product) {
        return null; // or throw an exception
    }

    $productData = [
        'id' => $product->id,
        'name' => $product->name,
        'description' => $product->description,
        'price' => $product->price,
        'category' => $product->category,
        'subcategory' => $product->subcategory,
        'image' => asset('storage/' . $product->image), // Assuming image is stored in public storage
    ];
}

function getRandomProductWithUniqueSubcategory($count = 3)
{
    $allProducts = ProductDetails::inRandomOrder()->get();

    $selectedProducts = [];
    $usedSubcategories = [];

    foreach ($allProducts as $product) {
        if (!in_array($product->subcategory, $usedSubcategories)) {
            $selectedProducts[] = $product;
            $usedSubcategories[] = $product->subcategory;
        }
        if (count($selectedProducts) >= $count) {
            break;
        }
    }

    return $selectedProducts;
}
<?php

use App\Models\ProductDetails;
use Illuminate\Support\Facades\Log;
use App\Models\ProductPackage;


// function getCategoryList()
// {
//     $data = ProductDetails::get();

//     $tree = [];
//     // add id as well to the product

//     foreach ($data as $row) {
//         $id = $row->id;
//         $category = $row->category;
//         $subcategory = $row->subcategory;
//         $product = $row->product;

//         // Ensure category exists
//         if (!isset($tree[$category])) {
//             $tree[$category] = [
//                 'id' => $id,
//                 'category' => $category,
//                 'subcategories' => []
//             ];
//         }

//         // Ensure subcategory exists under category
//         if (!isset($tree[$category]['subcategories'][$subcategory])) {
//             $tree[$category]['subcategories'][$subcategory] = [
//                 'subcategory' => $subcategory,
//                 'products' => []
//             ];
//         }

//         // Add product
//         $tree[$category]['subcategories'][$subcategory]['products'][] = $product;
//     }

//     // Fix array keys for JSON response
//     $tree = array_map(function ($cat) {
//         $cat['subcategories'] = array_values(array: $cat['subcategories']);
//         return $cat;
//     }, $tree);



//     Log::info('Category List', $tree); // Log the data for debugging

//     return array_values($tree); // ✅ return as array
// }


function getCategoryList()
{
    $data = ProductDetails::get();

    $tree = [];

    foreach ($data as $row) {
        $id = $row->id;
        $category = $row->category;
        $subcategory = $row->subcategory;
        $product = $row->product;
        $slug = $row->slug; // ✅ Get slug from database

        // Ensure category exists
        if (!isset($tree[$category])) {
            $tree[$category] = [
                'id' => $id,
                'category' => $category,
                'slug' => $slug, // ✅ Use database slug
                'subcategories' => []
            ];
        }

        // Ensure subcategory exists under category
        if (!isset($tree[$category]['subcategories'][$subcategory])) {
            $tree[$category]['subcategories'][$subcategory] = [
                'subcategory' => $subcategory,
                'slug' => $slug, // ✅ Use database slug
                'products' => []
            ];
        }

        // Add product with slug from database
        $tree[$category]['subcategories'][$subcategory]['products'][] = [
            'name' => $product,
            'slug' => $slug // ✅ Use database slug
        ];
    }

    // Fix array keys for JSON response
    $tree = array_map(function ($cat) {
        $cat['subcategories'] = array_values($cat['subcategories']);
        return $cat;
    }, $tree);

    // Log::info('Category List', $tree);

    return array_values($tree);
}
function getPackages()
{
    $data = ProductPackage::get();

    return $data; // ✅ return as array
}
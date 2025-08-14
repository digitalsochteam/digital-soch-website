<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Call the helper function
        $categories = getCategoryList();

        // Pass categories to the view
        return view('welcome', compact(var_name: 'categories'));
    }
}

<?php

namespace App\Http\Controllers;


use App\Helpers\helpers; // Ensure this is the correct namespace for your helper functions

class DashBoardController extends Controller
{
    public function index()
    {
        $categories = getCategoryList();
        return view('dashboard.index', compact('categories'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CompanyLogo;
use App\Models\Testimonial;
use App\Models\ProductDetails;

class DashboardController extends Controller
{
    public function index()
    {
        // $blogs = Blog::get();
        $allProducts = ProductDetails::inRandomOrder()->get();

        $selectedProducts = [];
        $usedSubcategories = [];

        foreach ($allProducts as $product) {
            if (!in_array($product->subcategory, $usedSubcategories)) {
                $selectedProducts[] = $product;
                $usedSubcategories[] = $product->subcategory;
            }
            if (count($selectedProducts) >= 4) {
                break;
            }
        }
        $blogs = Blog::get();
        $testimonials = Testimonial::inRandomOrder()->take(3)->get();
        $companyLogo = CompanyLogo::get();

        return view('frontend.dashboard.index', compact('selectedProducts', 'blogs', 'testimonials', 'companyLogo'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CompanyLogo;
use App\Models\Testimonial;
use App\Models\ProductDetails;
use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use App\Models\ProductPackage;
use App\Models\ProductPackageSubscription;

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
            if (count($selectedProducts) >= 6) {
                break;
            }
        }
        $blogs = Blog::get();
        $testimonials = Testimonial::inRandomOrder()->take(3)->get();
        Log::info('Testimonials:', ['testimonials' => $testimonials]);
        $companyLogo = CompanyLogo::get();
        $sliders = Slider::get();



        return view('frontend.dashboard.index', compact('selectedProducts', 'blogs', 'testimonials', 'companyLogo', 'sliders'));
    }

    public function findBySlug(string $slug)
    {
        try {
            // 1️⃣ Try to find product by slug
            $product = ProductDetails::where('slug', $slug)->first();

            if ($product) {
                // Fetch related products (same subcategory, different name)
                $otherProducts = ProductDetails::where('subcategory', $product->subcategory)
                    ->where('id', '!=', $product->id) // safer than comparing by name
                    ->select('product', 'slug')
                    ->distinct('product')
                    ->get()
                    ->map(fn($item) => [
                        'name' => $item->product,
                        'slug' => $item->slug,
                    ]);

                return view('frontend.product.show', compact('product', 'otherProducts'));
            }

            // 2️⃣ Try to find package by slug
            $package = ProductPackage::where('slug', $slug)->first();

            if ($package) {
                // Load related subscriptions
                $subscriptions = ProductPackageSubscription::where('product_package_id', $package->id)->get();

                return view('frontend.package.show', compact('package', 'subscriptions'));
            }

            // 3️⃣ If not found in either table
            return redirect()
                ->route('dashboard.index')
                ->with('error', 'No product or package found for this link.');

        } catch (\Throwable $e) {
            // 4️⃣ Handle unexpected errors gracefully
            Log::error('Error in findBySlug', [
                'slug' => $slug,
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()
                ->route('dashboard.index')
                ->with('error', 'Something went wrong. Please try again later.');
        }
    }

}
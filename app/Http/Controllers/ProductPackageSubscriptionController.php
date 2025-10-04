<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPackageSubscription;
use App\Models\ProductPackage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductDetails;

class ProductPackageSubscriptionController extends Controller
{
    public function index()
    {
        $details = ProductPackageSubscription::get();
        return view('backend.package-subscription.list', compact('details'));
    }

    public function create()
    {
        $packages = ProductPackage::pluck('slug', 'id');
        return view('backend.package-subscription.create', compact('packages', ));
    }

    public function show($slug)
    {
        $package = ProductPackage::where('slug', $slug)->first();
        return view('frontend.package.show', compact('package'));
        // $product = ProductDetails::where('slug', $slug)->first();

        // if ($product) {
        //     $otherProducts = ProductDetails::where('subcategory', $product->subcategory)
        //         ->where('product', '!=', $product->product)
        //         ->pluck('product')
        //         ->unique();
        //     return view('frontend.product.show', compact('product', 'otherProducts'));
        // }


        // $package = ProductPackage::where('slug', $slug)->first();

        // if ($package) {
        //     return view('frontend.package.show', compact('package'));
        // }
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'product_package_id' => 'required|exists:productpackages,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ispopular' => 'required|boolean',
            'head' => 'nullable|array',
            'head.*.key' => 'nullable|string',
            'head.*.value' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] =
                $request->file('image')->store('subscription_images', 'public');
        }


        if (!empty($data['head'])) {
            $data['head'] = json_encode($data['head']);
        }


        ProductPackageSubscription::create($data);

        return redirect()->route('package-subscription-details.index')
            ->with('success', 'Subscription created successfully.');
    }


    public function edit(ProductPackageSubscription $detail)
    {

        $packages = ProductPackage::pluck('slug', 'id');
        return view('backend.package-subscription.edit', compact('detail', 'packages'));
    }
    public function update(Request $request, ProductPackageSubscription $detail)
    {
        Log::info('Route parameter subscription ID: ', ['id' => $detail->id]);


        $data = $request->validate([
            'product_package_id' => 'required|exists:productpackages,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ispopular' => 'required|boolean',
            'head' => 'nullable|array',
            'head.*.key' => 'nullable|string',
            'head.*.value' => 'nullable|string',
        ]);

        // ✅ Handle image replacement
        if ($request->hasFile('image')) {
            if ($detail->image) {
                Storage::disk('public')->delete($detail->image);
            }
            $data['image'] = $request->file('image')->store('subscription_images', 'public');
        }

        Log::info('Before normalization: ', $data);

        if (!empty($data['head'])) {
            $data['head'] = json_encode($data['head']);
        }

        Log::info('Validated data (normalized): ', $data);

        // ✅ Update
        $detail->update($data);

        return redirect()->route('package-subscription-details.index')
            ->with('success', 'Subscription updated successfully.');
    }

    public function destroy(ProductPackageSubscription $detail)
    {

        $detail->delete();
        return back()->with('success', 'Detail deleted.');
    }
}
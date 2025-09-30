<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPackageSubscription;
use App\Models\ProductPackage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

        // Handle file upload
        $imagePath = null;

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

    public function update(Request $request, ProductPackageSubscription $subscription)
    {
        $request->validate([
            'product_package_id' => 'required|exists:productpackages,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ispopular' => 'required|boolean',
            'head' => 'nullable|array',
            'head.*.key' => 'nullable|string',
            'head.*.value' => 'nullable|string',
        ]);

        // Handle file upload (replace if new one uploaded)
        $imagePath = $subscription->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('subscription_images', 'public');
        }

        // ✅ Convert FAQs to JSON if present
        if (!empty($request['head'])) {
            $request['head'] = json_encode($request['head']);
        } else {
            // If no FAQs were submitted, set to null (or keep existing if you prefer)
            $request['head'] = null;
        }

        $subscription->update([
            'product_package_id' => $request->product_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'ispopular' => $request->ispopular,
            'head' => json_encode($request->head),
        ]);

        return redirect()->route('package-subscription-details.index')
            ->with('success', 'Subscription updated successfully.');
    }

    public function destroy(ProductPackageSubscription $detail)
    {

        $detail->delete();
        return back()->with('success', 'Detail deleted.');
    }
}
<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Models\MainProduct;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $details = ProductDetails::get();
        return view('backend.product.list', compact('details'));
    }

    public function create()
    {
        $packages = MainProduct::pluck('name', 'id');
        return view('backend.product.create', compact('packages'));
    }
    public function show($id)
    {

        // Fetch product by ID
        $id = str_replace('_', ' ', $id);
        $product = ProductDetails::where('product', $id)->first();
        $otherProducts = ProductDetails::where('subcategory', $product->subcategory)
            ->where('product', '!=', $product->product)
            ->pluck('product')
            ->unique();


        Log::info('Other Products:', ['product' => $product]);

        // Pass product to view
        return view('frontend.product.show', compact('product', 'otherProducts'));
    }

    public function store(Request $request)
    {
        // ✅ Validate input, including faqs as an array of question/answer pairs
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'category' => 'required|string|max:255',
            'subcategory' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'product_details' => 'nullable|string',
            'position' => 'required|numeric',
            'product_image' => 'required|image|max:2048',
            'product_subheading' => 'required|string',
            'product_detail' => 'required|string',
            'faqs' => 'nullable|array',              // <-- array from dynamic form
            'faqs.*.question' => 'nullable|string',             // optional but recommended
            'faqs.*.answer' => 'nullable|string',
        ]);

        // ✅ Store image
        if ($request->hasFile('product_image')) {
            $data['product_image'] =
                $request->file('product_image')->store('product_images', 'public');
        }

        // ✅ Replace "__new__" placeholders with user input
        if ($data['category'] === '__new__' && $request->filled('new_category')) {
            $data['category'] = $request->new_category;
        }
        if ($data['subcategory'] === '__new__' && $request->filled('new_subcategory')) {
            $data['subcategory'] = $request->new_subcategory;
        }

        // ✅ Convert FAQ array to JSON for storage
        //     (assuming your `product_details` table has a `faqs` column of type JSON or TEXT)
        if (!empty($data['faqs'])) {
            $data['faqs'] = json_encode($data['faqs']);
        }

        // ✅ Save everything
        ProductDetails::create($data);

        return redirect()
            ->route('product-details.index')
            ->with('success', 'Detail created.');
    }


    public function edit(ProductDetails $detail)
    {

        $packages = MainProduct::pluck('name', 'id');
        return view('backend.product.edit', compact('detail', 'packages'));
    }

    public function update(Request $request, ProductDetails $detail)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'category' => 'required|string|max:255',
            'subcategory' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'product_details' => 'nullable|string',
            'position' => 'required|numeric',
            'product_image' => 'nullable|image|max:2048',
            'product_subheading' => 'nullable|string|max:255',
            'product_detail' => 'nullable|string|max:255',
            'faqs' => 'nullable|array',      // accepts an array of Q&As
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
        ]);

        // ✅ Replace "__new__" placeholders if you use them on the edit form
        if ($data['category'] === '__new__' && $request->filled('new_category')) {
            $data['category'] = $request->new_category;
        }
        if ($data['subcategory'] === '__new__' && $request->filled('new_subcategory')) {
            $data['subcategory'] = $request->new_subcategory;
        }

        // ✅ Handle image replacement
        if ($request->hasFile('product_image')) {
            if ($detail->product_image) {
                Storage::disk('public')->delete($detail->product_image);
            }
            $data['product_image'] =
                $request->file('product_image')->store('product_images', 'public');
        }

        // ✅ Convert FAQs to JSON if present
        if (!empty($data['faqs'])) {
            $data['faqs'] = json_encode($data['faqs']);
        } else {
            // If no FAQs were submitted, set to null (or keep existing if you prefer)
            $data['faqs'] = null;
        }

        // ✅ Update the record
        $detail->update($data);

        return redirect()
            ->route('product-details.index')
            ->with('success', 'Detail updated.');
    }

    public function destroy(ProductDetails $detail)
    {

        $detail->delete();
        return back()->with('success', 'Detail deleted.');
    }
}
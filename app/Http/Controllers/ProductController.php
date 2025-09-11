<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Models\MainProduct;
use Log;
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
        $product = ProductDetails::findOrFail($id);

        // Pass product to view
        return view('products.show', compact('product'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'category' => 'required|string|max:255',
            'subcategory' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'product_details' => 'nullable|string',
            'position' => 'required|numeric',
        ]);

        // Replace "__new__" with user-entered text
        if ($data['category'] === '__new__' && $request->filled('new_category')) {
            $data['category'] = $request->new_category;
        }
        if ($data['subcategory'] === '__new__' && $request->filled('new_subcategory')) {
            $data['subcategory'] = $request->new_subcategory;
        }

        ProductDetails::create($data);

        return redirect()->route('product-details.index')->with('success', 'Detail created.');
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
        ]);

        $detail->update($data);

        return redirect()->route('product-details.index')->with('success', 'Detail updated.');
    }

    public function destroy(ProductDetails $detail)
    {

        $detail->delete();
        return back()->with('success', 'Detail deleted.');
    }
}
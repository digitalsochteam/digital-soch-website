<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Models\MainProduct;
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
}
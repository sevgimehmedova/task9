<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
use App\Models\Product; // Import the Product model at the top

class ProductController extends Controller {

    // Method to retrieve all products
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Method to show a specific product
    public function show($id) {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Method to create a new product
    public function store(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $request->image_url;
        $product->save();
        return redirect('/products');
    }

    // Method to update an existing product
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $request->image_url;
        $product->save();
        return redirect('/products');
    }

    // Method to delete a product
    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products');
    }
}

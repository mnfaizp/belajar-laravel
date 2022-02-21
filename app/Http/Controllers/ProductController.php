<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $product = new Product();

        $product->product_name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $product->save();

        return redirect('/');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->product_name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $product->save();

        return redirect('/');
    }

    public function destroy(Request $request, $id) {
        Product::destroy($id);

        return back();
    }
}

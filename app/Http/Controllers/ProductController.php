<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('delivery')->get();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:50|unique:products,name',
            'qty' => 'required|numeric|integer',
            'price' => 'required|decimal:0,2|regex:/^\d+(\.\d{1,2})?$/', // Change from decimal:2 to numeric
            'description' => 'nullable|max:200',
            'delivery' => 'required|numeric',
        ]);
    
        $newProduct = Product::create($data);
    
        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required|max:50',
            'qty' => 'required|numeric|integer',
            'price' => 'required|decimal:0,2|regex:/^\d+(\.\d{1,2})?$/', // Change from decimal:2 to numeric
            'description' => 'nullable|max:200',
            'delivery' => 'required|numeric',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product updated successfully');
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted successfully');

    }
    
}


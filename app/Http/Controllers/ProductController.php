<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
        return view('prof', compact('products'));
    }

    public function create()
    {
        $products = Product::all();
        return view('products.create', compact('products'));
    }


    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('product.create')->with('info', 'Товар добавлен');


    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->description = $request->description;

        $product->save();

        return response()->json([
            'message' => 'изменено',
            'status' => '200',
            'data' => $product,
        ]);
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'удалено',
            'status' => '200',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return response()->json([
            '' => Product::get()
        ]);
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;

        $product->save();

        return response()->json([
            'message' => 'success',
            'status' => '200',
            'data' => $product,
        ]);
    }


    public function show(Product $product)
    {
        return response()->json(['post' => $product]);
    }


    public function edit(Product $product)
    {
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

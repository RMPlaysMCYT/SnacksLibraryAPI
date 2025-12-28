<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        return response()->json(Products::all(), 200);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_code' => 'required|integer',
            'product_name' => 'required|string',
            'details' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Products::create($validatedData);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ], 201);
    }

    public function update(Request $request, Products $product)
    {
        $product->update($request->all());

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product
        ]);
    }

    public function destroy(Products $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }
}

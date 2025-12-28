<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::latest()->paginate(5);
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // FIX 1: Capture the validated data into a variable
        $validatedData = $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'details' => 'required',
            'price' => 'required',
        ]);

        // FIX 2: Create using ONLY the validated data (excludes _token automatically)
        Products::create($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    // FIX 3: Changed variable from $products (plural) to $product (singular)
    // to match standard Laravel Resource route binding.
    public function show(Products $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $validatedData = $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'details' => 'required',
            'price' => 'required',
        ]);

        // FIX 4: Update using validated data
        $product->update($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product Deleted Successfully');
    }
}
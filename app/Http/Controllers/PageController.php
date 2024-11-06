<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|integer|max:200',
            'description' => 'required|string|max:150',
            'slug' => 'required|string|max:50',
        ]);

        Product::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'slug' => $validatedData['slug'],
        ]);

        return redirect()->route('index')
             ->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::query()->find($id);  // Fixed query syntax
        return view('admin.edit', compact('product'));  // Fixed view syntax
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|integer|max:200',
            'description' => 'required|string|max:150',
            'slug' => 'required|string|max:50',
        ]);

        $product = Product::query()->find($id);  // Fixed query syntax

        $product->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],  // Fixed typo here
            'slug' => $validatedData['slug'],
        ]);

        return redirect()->route('index')->with('message', 'Product updated successfully');
    }
}


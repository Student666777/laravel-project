<?php

namespace App\Http\Controllers;


use App\Models\Product;

class PageContoller extends Controller
{
    public function index(){

        $products = Product::all();
        return view('index' , compact('products'));
    }
}

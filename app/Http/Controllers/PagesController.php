<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // we called this method @home in the routes/web.php
    public function home() {
        return view('welcome');
    }

    public function allProducts(){
        
        //fetch all products
        $products = \App\Product::all();

        // return view('all-products', ['products' => $products]);
        return view('all-products', compact('products'));
    }

    public function addProducts(){
        return view('add-products');
    }
}

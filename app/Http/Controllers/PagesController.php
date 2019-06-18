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
        //simply loads a view
        return view('add-products');
    }

    public function store() {
        // connects request
        $product = new \App\Product();

        $product->sku = request('skufield');
        $product->name = request('namefield');
        $product->price_eur = request('pricefield');
        $product->type = request('typefield');

        $product->save();
        
        //this is shortcut grab all info user inputs in the form within add-product page
        // return request()->all();

        //redirect to all-products page via GET request by default
        return redirect('/all-products');
    }

    public function edit($id) {
        // return $id; //test
        $product = \App\Product::find($id);

        return view('edit', compact('product'));

    }
    public function update($id) {
        //dd('hello!'); //test, am i hitting this part of the code
        //dd(request()->all()); // test fetch all updated fields
        
        $product = \App\Product::find($id);

        $product->sku = request('skufield');
        $product->name = request('namefield');
        $product->price_eur = request('pricefield');
        $product->type = request('typefield');

        $product->save();

        return redirect('/all-products');
    }

    public function show() {

    }

    public function destroy() {

    }

}

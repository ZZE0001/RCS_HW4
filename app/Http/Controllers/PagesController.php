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
        return view('all-products');
    }

    public function addProducts(){
        return view('add-products');
    }
}

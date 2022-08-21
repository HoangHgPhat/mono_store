<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController2 extends Controller
{
    public function index()
    {
        return view('0905b.home');
    }
    public function getProducts()
    {
        $data = Product::get();
        return view('0905b.products',compact('data'));
    }

    
}

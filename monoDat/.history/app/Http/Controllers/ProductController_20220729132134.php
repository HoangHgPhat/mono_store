<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        return view('list', compact('data'));
    }

    public function add()
    {
        return view('add');
    }

    public function save(Request $request)
    {
        $product = new Product();
        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->productImage1 = $request->image1;
        $product->productProducerID = $request->producer;
        $product->save();

        return redirect()->back()->with('success', 'Product Added Successfully')
    }
}
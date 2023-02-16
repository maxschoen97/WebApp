<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = Product::all();

        return view('product', compact('data'));

    }

    public function show($id)
    {
        $productID = $id;

        return view('showProduct', compact(var_name: 'productID'));
    }

    public function store(Request $request)
    {
        // Store image file in storage
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('public/images');
        }
        $product = new Product;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->description_txt = $request->description_txt;
        $product->price = $request->price;
        $product->image_path = $request->$path;
        $product->save();

        return redirect('/product');
    }
}

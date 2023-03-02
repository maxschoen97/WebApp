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


        $validatedData = $request->validate([
            'id' => 'required|int|min:1',
            'name' => 'required|string|max:255',
            'description_txt' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image_path' => 'string|max:255',
        ]);
        // Store image file in storage

        $product = new Product;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->description_txt = $request->description_txt;
        $product->price = $request->price;
        $product->image_path = $request->image_path;
        $product->save();

        return redirect('/product');
    }
}

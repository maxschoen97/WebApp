<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    // View File To Upload Image
    public function index()
    {
        return view('image-form');
    }

    // Store Image
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:20480'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        //Store IMage
        return back()->with('success', $imageName)
            ->with('image', $imageName);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /// FeedbackController.php

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string',
        ]);

        Feedback::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'rating' => $validatedData['rating'],
            'feedback' => $validatedData['feedback'],
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

}

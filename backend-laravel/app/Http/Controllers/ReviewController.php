<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::with(['user', 'service'])->get();
    }

    public function show($id)
    {
        return Review::with(['user', 'service'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'service_id' => 'required|exists:services,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        $review = Review::create([
            'user_id' => $request->user()->id,
            'service_id' => $fields['service_id'],
            'rating' => $fields['rating'],
            'comment' => $fields['comment']
        ]);

        return response()->json($review, 201);
    }

    public function destroy($id)
    {
        Review::destroy($id);
        return response()->json(['message' => 'Avis supprimé.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /** GET /reviews — return latest approved reviews */
    public function index()
    {
        $reviews = Review::approved()
            ->latest()
            ->take(24)
            ->get(['id', 'name', 'platform', 'rating', 'body', 'created_at']);

        return response()->json($reviews);
    }

    /** POST /reviews — submit a new review */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:60',
            'platform' => 'required|in:Java,Bedrock',
            'rating'   => 'required|integer|min:1|max:5',
            'body'     => 'required|string|min:10|max:500',
        ]);

        $review = Review::create($data);

        return response()->json($review, 201);
    }
}

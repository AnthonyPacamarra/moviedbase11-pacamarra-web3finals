<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class RatingController extends Controller
{
    public function getMoviesWithRatings()
    {
        $movies = Movie::with(['ratings.reviewer'])->get();
        return response()->json($movies);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    public function getAllMovies()
    {
        $movies = Movie::with('directors', 'genres', 'actors', 'ratings.reviewer')->get();
        return response()->json($movies);
    }

    public function getMovieById($id)
    {
        $movie = Movie::with('directors', 'genres', 'actors', 'ratings.reviewer')->findOrFail($id);
        return response()->json($movie);
    }
}

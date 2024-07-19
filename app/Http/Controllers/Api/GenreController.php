<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;


class GenreController extends Controller
{
    public function getMoviesByGenre($gen_title)
    {
        $genre = Genre::where('gen_title', $gen_title)
            ->with('movies')
            ->firstOrFail();
        return response()->json($genre);
    }
}

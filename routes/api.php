<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\RatingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('userprofile', [AuthController::class, 'userprofile']);

    Route::get('movies', [MovieController::class, 'getAllMovies']);
    Route::get('movies/{mov_id}', [MovieController::class, 'getMovieById']);
    Route::get('directors', [DirectorController::class, 'getDirector']);
    Route::get('directors/{dir_id}', [DirectorController::class, 'getDirectorById']);
    Route::get('actors', [ActorController::class, 'getActor']);
    Route::get('actors/{act_id}', [ActorController::class, 'getActorById']);
    Route::get('genres', [GenreController::class, 'getMoviesByGenre']);
    Route::get('genres/{gen_title}', [GenreController::class, 'getMoviesByGenreTitle']);
    Route::get('ratings', [RatingController::class, 'getMoviesWithRatings']);
});

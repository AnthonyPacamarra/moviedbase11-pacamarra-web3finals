<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Director;


class DirectorController extends Controller
{
    public function getDirectorById($id)
    {
        $director = Director::with('movies')->findOrFail($id);
        return response()->json($director);
    }
}

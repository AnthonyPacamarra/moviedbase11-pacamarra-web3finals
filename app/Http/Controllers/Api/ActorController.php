<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function getActorById($id)
    {
        $actor = Actor::with('movies')->findOrFail($id);
        return response()->json($actor);
    }
}

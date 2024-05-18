<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseServer extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $search = $request->search;
        if ($search) {
            return Exercise::where('name', 'like', "%$search%")->get();
        }

        return Exercise::get();
    }
}

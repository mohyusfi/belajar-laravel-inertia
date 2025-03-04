<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $result = $request->validate([
            "title"         => ["required", "string"],
            "description"   => ["nullable", "string"],
            "image"         => ["nullable", "image"]
        ]);

        dd($result);
    }
}

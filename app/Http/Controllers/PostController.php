<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $result = $request->validate([
            "title"         => ["required", "string"],
            "picture"         => ["nullable"],
            "description"   => ["nullable", "string"],
        ]);

        $path = $request->file('picture')->storePublicly('post', 'public');

        $result['picture'] = $path;

        // dd($result);
        Post::create($result);
    }
}

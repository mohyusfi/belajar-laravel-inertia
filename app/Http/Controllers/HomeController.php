<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function counterPage()
    {
        return Inertia::render('Counter', [
            'message' => 'Hello from Laravel Inertia!',
        ]);
    }

    public function homePage()
    {
        return Inertia::render('Home', [
            'message' => 'Hello from Laravel Inertia!',
            'post' => Post::all()
        ]);
    }

    public function postPage()
    {
        return Inertia::render('Post', [
            'title' => 'Halaman Post'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

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
        // sleep(1);
        return Inertia::render('Home', [
            'user' => 'Yusfi',
            'message' => 'Hello from Laravel Inertia!',
        ]);
    }

    public function postPage()
    {
        return Inertia::render('Post', [
            'title' => 'Halaman Post'
        ]);
    }
}

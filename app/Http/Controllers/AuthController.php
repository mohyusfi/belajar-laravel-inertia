<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $requestData = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "string", "confirmed"]
        ]);
        // dd($request);

        $user = User::create($requestData);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $requestData = $request->validate([
            "email" => ["required", "email", "string", "exists:users,email"],
            "password" => ["required", "string"]
        ]);

        Auth::attempt($requestData, true);

        return redirect()->route('home');
    }
}

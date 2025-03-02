<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/counter', [HomeController::class, 'counterPage'])->name('counter');
Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::inertia('/register', 'Auth/Register', ['title' => 'Register'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::inertia('/login', 'Auth/Login', ['title' => 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
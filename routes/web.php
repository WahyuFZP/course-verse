<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('profile', [
        "tittle" => "Profile"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "tittle" => "Profile"
    ]);
});

Route::get('/task', function () {
    return view('task', [
        "tittle" => "Task"
    ]);
});

Route::get('/schedule', function () {
    return view('schedule', [
        "tittle" => "Schedule"
    ]);
});

Route::get('/chat', function () {
    return view('chat', [
        "tittle" => "Chat"
    ]);
});

// Route Login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Route Logout
Route::get('/logout',[LoginController::class,'logout']);


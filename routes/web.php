<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('posts', PostController::class);

Route::get('home', [PageController::class, 'home']);
Route::get('about', [PageController::class, 'about']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('contact', [PageController::class, 'contact']);
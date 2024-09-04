<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return Inertia::render('Main', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Main', function (){
    return Inertia::render('Main');
})->name('main');

Route::get('/SocialData', function () {
    return Inertia::render('SocialData');
})->name('socialdata');

Route::get('/Analysis', function () {
    return Inertia::render('Analysis');
})->name('analysis');

Route::get('/About', function () {
    return Inertia::render('About');
})->name('about');


Route::get('/Message', function () {
    return Inertia::render('Message');
})->name('Message');



Route::post('/messages', [MessageController::class, 'store']);




require __DIR__.'/auth.php';

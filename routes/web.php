<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\NominationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});
// Route::post('/vote', [VoteController::class, 'vote'])->name('vote');
// Route::middleware('throttle:5,1')->post('/vote', [VoteController::class, 'vote']);  // 5 requests per minute
// Route::get('/vote', [VoteController::class, 'showVotingForm'])->name('vote.form');
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Route::get('/nomination', action: [NominationController::class, 'create'])->name('nomination.create');
// Route::post('/nomination', [NominationController::class, 'store'])->name('nomination.store');
// Route::get('/nominations', [NominationController::class, 'index'])->name('nominations.index');



// Route for submitting the vote (POST)
Route::post('/vote', [VoteController::class, 'submitVote'])->name('vote.submit');

// Authentication routes
Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Protected routes (requires login)
Route::middleware(['auth'])->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/nominations/admin', [NominationController::class, 'adminView'])->name('nominations.admin'); // Admin view
    Route::get('/nomination', [NominationController::class, 'create'])->name('nomination.create');
});

// Public routes
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');


// Public nomination form
Route::post('/nomination', [NominationController::class, 'store'])->name('nomination.store');
Route::get('/vote', [\App\Http\Controllers\VoteController::class, 'index'])->name('vote.index'); // Public voting page
Route::post('/vote', [\App\Http\Controllers\VoteController::class, 'submit'])->name('vote.submit');
Route::get('/categories/check', [NominationController::class, 'getAvailableCategories']);
Route::get('/categories/{id}/nominations', [CategoryController::class, 'getNominations']);

Route::get('/vote', [VoteController::class, 'index'])->name('vote.index');
Route::post('/vote', [VoteController::class, 'store'])->name('vote.store');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

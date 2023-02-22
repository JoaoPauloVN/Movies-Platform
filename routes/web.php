<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [MovieController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/movies", [MovieController::class, "index"])->name("movies.index");
    Route::get("/movies/popular", [MovieController::class, "popular"])->name("movies.popular");
    Route::get("/movies/top-rated", [MovieController::class, "topRated"])->name("movies.top_rated");
    Route::get("/movie/{movie}", [MovieController::class, "movie"])->name("movies.latest");
    Route::get("/movies/upcoming", [MovieController::class, "upcoming"])->name("movies.upcoming");
});

require __DIR__.'/auth.php';

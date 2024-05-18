<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('guests.home');
})->name('home');

Route::get('/characters', function () {
    return view('guests.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('guests.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('guests.tv');
})->name('tv');

Route::get('/games', function () {
    return view('guests.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('guests.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('guests.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('guests.fans');
})->name('fans');

Route::get('/news', function () {
    return view('guests.news');
})->name('news');

Route::get('/shop', function () {
    return view('guests.shop');
})->name('shop');

Route::get('/comics', [ComicController::class,'index'])->name('comics');
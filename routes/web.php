<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', [TweetController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/tweets', [TweetController::class, 'store'])->middleware('auth')->name('tweet.store');
Route::post('/follow/{user}', [FollowController::class, 'follow'])->middleware('auth')->name('follow');
Route::get('/followers/{user}', [FollowController::class, 'followers'])->middleware('auth')->name('followers');
Route::get('/followed/{user}', [FollowController::class, 'followed'])->middleware('auth')->name('followed');
Route::get('/search', [SearchController::class, 'searchUser'])->middleware('auth')->name('search.user');
Route::get('/profile/{user}', function (App\Models\User $user) {
    return view('profile', compact('user'));

})->name('profile');

require __DIR__.'/auth.php';

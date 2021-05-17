<?php

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

Route::middleware('auth')->group(function () {
    // Route::post('/tweets', 'TweetsController@store');

    /* Tweets */
    Route::get('/tweets', [App\Http\Controllers\TweetsController::class, 'index', 'show', 'create'])->name('home');
    Route::post('/tweets', [App\Http\Controllers\TweetsController::class, 'store']);

    /* Follow */
    Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowsController::class, 'store'])->name('follow');
    /* Edit Profile */
    Route::get('/profiles/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->middleware('can:edit,user');
    /* Update Profile */
    Route::patch('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'update'])->middleware('can:edit,user');

    /* Explore page */
    Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index']);

    /* Like & Dislike */
    Route::post('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'store']);
    Route::delete('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'destroy']);

    /* Contact Tweety */
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show']);
    Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store']);
    
// Route::get('app/contact', [App\Http\Controllers\ContactController::class, 'store'], 'ContactController@show');
// Route::post('contact', [App\Http\Controllers\ContactController::class, 'store'], 'ContactController@store');
});

/* Profiles Page */
Route::get('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');

Auth::routes();

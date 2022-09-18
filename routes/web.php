<?php

use App\Http\Controllers\Backend\CommunityController;
use App\Http\Controllers\Backend\CommunityPostController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\SubredditController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
	return Inertia::render('Welcome', [
		'canLogin' => Route::has('login'),
		'canRegister' => Route::has('register'),
		'laravelVersion' => Application::VERSION,
		'phpVersion' => PHP_VERSION,
	]);
});

// for frontend routes
Route::get('/r/{slug}', [SubredditController::class, 'show'])->name('subreddit.index');
Route::get('/r/{community:slug}/post/{post:slug}', [PostController::class, 'show'])->name('frontend.post.show');

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('/dashboard', function () {
		return Inertia::render('Dashboard');
	})->name('dashboard');

	Route::resource('communities', CommunityController::class);
	Route::resource('community.post', CommunityPostController::class);
});

require __DIR__ . '/auth.php';

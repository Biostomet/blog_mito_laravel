<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
Route::get('/all-posts', [PostController::class, 'allPosts'])->name('posts.all');
Route::get('/all-users', [UserController::class, 'allUsers'])->name('users.all');

Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment.store');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

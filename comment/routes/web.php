<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::domain('admin.localhost')->group(function () {
  //  Route::resource('posts', PostController::class);
  //  Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

  //  Route::get('/', function () {

  //      return "Admin Panel";
  //  });

    Route::resource('posts', PostController::class);
    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

});



Route::get('/', function () {
    return view('welcome');
});



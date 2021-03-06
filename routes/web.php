<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
Route::get('/posts', [PostsController::class, 'index'])->name('api_posts_index');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('api_post_show');
Route::get('/', function () {
    return redirect()->route('api_posts_index');
});

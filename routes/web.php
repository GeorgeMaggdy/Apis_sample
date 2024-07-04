<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\Api\FilesController;

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
    return view('welcome');
});

Route::get('/posts', [postController::class, 'home'])->name('posts');
Route::get('/posts/create', [postController::class, 'create'])->name('posts.create');
Route::post('/posts', [postController::class, 'store'])->name('posts.store');
Route::get('/posts/show', [postController::class, 'show'])->name('posts.show');
Route::get('/posts/{view}', [postController::class, 'view'])->name('posts.view');
Route::get('/posts/{edit}', [postController::class, 'view'])->name('posts.edit');
Route::post('/posts/edit/{id}', [postController::class, 'edit'])->name('posts.update');
Route::get('/posts/delete/{id}', [postController::class, 'delete'])->name('posts.delete');
Route::get('/posts/onlyview/{edit}', [postController::class, 'onlyview'])->name('posts.onlyview');








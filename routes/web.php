<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PostController::class, 'about'])->name('about');
Route::get('/post', [App\Http\Controllers\PostController::class, 'post'])->name('post');
Route::get('/message', [App\Http\Controllers\PostController::class, 'message'])->name('message');
Route::post('/comment', [App\Http\Controllers\PostController::class, 'comment'])->name('comment');
Route::get('/book/{id}', [App\Http\Controllers\PostController::class, 'book'])->name('book');
Route::post('/adm', [App\Http\Controllers\PostController::class, 'inv'])->name('inv');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/status/{id}', [App\Http\Controllers\HomeController::class, 'status'])->name('status');
Route::get('/article', [App\Http\Controllers\PostController::class, 'article_list'])->name('article');





Route::group(['prefix'=>'/admin','middleware'=> 'auth'] ,function () {

Route::get('/desc', [App\Http\Controllers\PostController::class, 'desc'])->name('desc');
Route::resource('/book', App\Http\Controllers\BookController::class);
// Route::resource('/desc', App\Http\Controllers\ArticleController::class);
Route::get('/inv', [App\Http\Controllers\HomeController::class, 'inv'])->name('contact');


Route::get('/profi', [App\Http\Controllers\PostController::class, 'profi'])->name('profi');
Route::post('/name', [App\Http\Controllers\HomeController::class, 'name'])->name('name');
Route::post('/email', [App\Http\Controllers\HomeController::class, 'email'])->name('email');
Route::post('/parol', [App\Http\Controllers\HomeController::class, 'password'])->name('parol');

});
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
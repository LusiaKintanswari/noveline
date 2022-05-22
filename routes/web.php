<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\RegisterController;

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

Route::get('/home', [HomeController::class, 'show_home']);
Route::get('/home/authors', [HomeController::class, 'show_authors']);
Route::get('/home/genres', [HomeController::class, 'show_genres']);
Route::get('/library', [LibraryController::class, 'show_library']);
Route::get('/authors/{author:name}', [HomeController::class, 'show_author_details']);
Route::get('/genres/{genre:name}', [HomeController::class, 'show_genre_details']);
Route::get('/signIn', [SignInController::class, 'sign_in']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('book/{book:title}', [BookController::class, 'show_detail_book']);
Route::get('book/read/{book:title}', [BookController::class, 'show_read_book']);

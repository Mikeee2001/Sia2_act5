<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, ('home')])->name('home');
Route::get('/create-blog', [UserController::class, ('createBlog')]);
Route::get('/blog', [UserController::class, ('Blog')]);
Route::post('/save-blog', [UserController::class, ('saveBlog')])->name('save-blog');

Route::get('contact', [UserController::class, 'contactPage'])->name('contact');
Route::get('about-us', [UserController::class, 'about'])->name('about');
Route::get('save-blog', [UserController::class, 'saveBlog']);
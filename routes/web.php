<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => "about",
        "name" => "Iron",
        "email" => "Ironi@gmail.com",
        "image" => "iron.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => 'Post Categories',
        "active" => 'categories',
        'categories' => category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/register', [RegistrasiController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');





Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
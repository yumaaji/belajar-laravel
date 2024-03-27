<?php

use App\Http\Controllers\AdminCategoriesController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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

// Mengarahkan ke halaman home atau index dari website
Route::get('/', function () {
    return view('home',[
        "title" =>"Home",
        "active" => "home",
    ]);
});

// Mengarahkan ke halaman about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Yuma Aji Pangestu",
        "email" => "yumaaji.@gmail.com",
        "image" => "broiscoding.jpg"
    ]);
});

// Mengarahkan ke halaman blog
// Dieksekusi melalui controller Post 
// Dengan menggunakan method index di PostController
Route::get('/blog', [PostController::class, 'index']);

// Menampilkan salah satu postingan
Route::get('post/{post:slug}', [PostController::class, 'showPost']); 

// Menampilkan seluruh Kategori
Route::get('/categories', [PostController::class, 'showCategories']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;  

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoriesController::class)->middleware('admin');


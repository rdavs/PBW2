<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/main', [UserController::class, 'apalah'])->name('main');
// Route::get('/beranda2', [UserController::class, 'janda'])->name('beranda2');
// Route::get('/category', [UserController::class, 'category'])->name('category');
Route::get('/postingan', [PostController::class, 'index'])->name('postingan');
Route::get('/post/create', [PostController::class, 'create'])->name('post.add');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/detail', [UserController::class, 'infoCard'])->name('infoCard');
Route::get('/daftarPost', [UserController::class, 'index'])->name('post');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.detail');
Route::get('/category/{category}', [PostController::class, 'category'])->name('category');

Route::get('/search', [PostController::class, 'search'])->name('search');



Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');




Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('tambahPost');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

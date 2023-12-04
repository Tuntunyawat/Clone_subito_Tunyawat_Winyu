<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MyDataController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MyArticleController;

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


// Route Homepage
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// Route About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route My Data
Route::get('/profile/my-data', [MyDataController::class, 'index'])->name('myData');

// Route Edit User Information
Route::get('profile/my-data/user-information-edit', [MyDataController::class, 'info_edit'])->name('info-edit');

// Route Edit Password User
Route::get('profile/my-data/user-password-edit', [MyDataController::class, 'password_edit'])->name('password-edit');

// Route AddPost
Route::get('/addPost', [ArticleController::class, 'create'])->name('addPost.create');
ROute::post('/addPost', [ArticleController::class, 'store'])->name('addPost.store');

// Route My Article
route::get('/profile/my-article', [MyArticleController::class, 'index'])->name('myArticle');

// Route Edit Post
Route::get('/profile/my-article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');

// Route Update Post
Route::post('/profile/my-article/edit/{id}', [ArticleController::class, 'update'])->name('article.update');

// Route Delete
Route::delete('/profile/my-article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');
<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArticleController::class, 'index'])->name('welcome');
Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/article/create', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/create-polymorphisme-registration', [ArticleController::class, 'registration']);
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/contactez-nous', [ArticleController::class, 'contact'])->name('contact');

// Route::get('/articles', function() {
//     return view('articles');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

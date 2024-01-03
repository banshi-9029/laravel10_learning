<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
// use Symfony\Component\CssSelector\Node\FunctionNode;

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

Route::get('/', function () {
    return view('loginpage');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/articles', ArticleController::class);
});

/**
 * topページ
 */
Route::get('/top', function () {
    return view('top');
});

Route::get('/calendar',function(){
    return view('calendar');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
/**
 * 投稿一覧表示ルート
 */
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

/**
 * 投稿詳細表示ルート
 */
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

/**
 * 更新処理ルート
 */
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::patch('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
/**
 * 削除処理ルート
 */
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;

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
//     return view('portfolio.index');
// });

Route::get('about', function () {
    return view('front.portfolio.about');
});
Route::get('portfolio', function () {
    return view('front.portfolio.portfolio');
});
Route::get('blog', function () {
    return view('front.blog.index');
});

Route::get('contact', function () {
    return view('front.portfolio.contact');
});

Route::get('project-1', function () {
    return view('front.project.project_1');
});

Route::get('project-2', function () {
    return view('front.project.project_2');
});

Route::get('project-3', function () {
    return view('front.project.project_3');
});





Route::get('/', [HomeController::class, 'home']);
Route::get('/blog', [HomeController::class, 'index'])->name('blog');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/detail2', [HomeController::class, 'detail2'])->name('detail2');
Route::get('/detail3', [HomeController::class, 'detail3'])->name('detail3');
Route::get('/detail4', [HomeController::class, 'detail4'])->name('detail4');
Route::get('/detail5', [HomeController::class, 'detail5'])->name('detail5');
// upload

Route::get('/p/{slug}', [FrontArticleController::class, 'show']);
Route::get('/articles', [FrontArticleController::class, 'index']);
Route::post('/article/search', [FrontArticleController::class, 'index'])->name('search');

Route::get('category/{slug}', [FrontCategoryController::class, 'index']);



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('article', ArticleController::class);

    Route::resource('/categories', CategoryController::class)->only([
        'index', 'store', 'update', 'destroy'
    ])->middleware('UserAccess:1');

    Route::resource('/users', UserController::class);

    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

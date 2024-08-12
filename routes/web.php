<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/static', function () {
    return view('index');
})->name('static-index');
Route::get('/static-home', function () {
    return route('static-index');
});
Route::get('/about-us', function () {
    return view('about.about');
})->name('about');
// Route::get('/news-notice', function () {
//     return view('newsnotice');
// })->name('newsnotice');
// Route::get('/brands', function () {
//     return view('brands');
// })->name('brands');
// Route::get('/brand-detail', function () {
//     return view('brands-details');
// })->name('brand-details');
// Route::get('/gallery', function () {
//     return view('gallery');
// });
// Route::get('/gallery-list', function () {
//     return view('gallery-list');
// })->name('gallery-list');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::prefix('dynamic')->group(function () {
    Route::get('about', [IndexController::class, 'index']);
});

Route::get('index', [IndexController::class, 'index'])->name('index');

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/home', [IndexController::class, 'index']);
Route::get('dynamic-about', [AboutController::class, 'index']);

Route::get('news-detail/{slug}', [ArticleController::class, 'show'])->name('newsdetail');
Route::get('news-notice', [ArticleController::class, 'index'])->name('newsnotice');

// galllery

Route::get('gallery', [GalleryController::class, 'index'])->name('gallery-list');
// Route::get('gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');

// brands and details
Route::get('brands', [BrandController::class, 'index'])->name('brands');
Route::get('brands/{id}', [BrandController::class, 'show'])->name('brand_details');

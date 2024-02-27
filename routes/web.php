<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PricepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('price', [PricepageController::class, 'index'])->name('pricepage');
Route::get('/test', function () {
    return view('test');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/condition', function () {
    return view('condition');
});
Route::get('/articles', function () {
    return view('articles');
});
Route::get('/about', function () {
    return view('about');
})->name('aboutpage');
Route::get('/faq', function () {
    return view('faq');
})->name('faqpage');
Route::get('/contuct-us', function () {
    return view('contuct');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

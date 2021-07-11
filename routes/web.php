<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false
]);

Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/products', ProductController::class);
    Route::resource('/products/galleries', GalleryController::class);

    Route::get('/product/search', [SearchController::class, 'productSearch'])->name('products.search');
});



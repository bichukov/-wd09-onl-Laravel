<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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
Route::group(['prefix' => '/products', 'controller' => ProductController::class], function () {
    Route::get('/', 'products')->name('products.index');
    Route::get('/categories/{category}', 'category')->name('products.category');
    Route::get('/{product}', 'product')->name('products.show');
});
Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/promotions', [MainController::class, 'promotions'])->name('promotions');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/delivery-moscow', [MainController::class, 'delivery_moscow'])->name('delivery-moscow');
Route::get('/delivery-regions', [MainController::class, 'delivery_regions'])->name('delivery-regions');
Route::get('/return', [MainController::class, 'return'])->name('return');
Route::get('/designers', [MainController::class, 'designers'])->name('designers');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');


//Route::get('/', function () {
//    return view('index');
//});

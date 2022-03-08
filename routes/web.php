<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalloController;

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

Route::get('/', [HalloController::class, 'index']);

Route::prefix('prodak')->group(function(){
    Route::get('/produk', [HalloController::class, 'product1']);
});
    Route::get('/news/{news}', [HalloController::class,'news1']);

    Route::get('/program', [HalloController::class,'program1']);

    Route::get('/about-us', [HalloController::class,'aboutus']);

    Route::get('/contact-us', [HalloController::class,'contactus']);

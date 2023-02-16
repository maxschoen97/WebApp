<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('home', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('locations', function () {
    return view('locations');
});

Route::get('info', function () {
    return 'Information';
});

Route::get('Contact', function () {
    return view('contact');
});




Route::controller(App\Http\Controllers\ImageController::class)->group(function(){
    Route::get('/image-upload', 'index')->name('image.form');
    Route::post('/upload-image', 'storeImage')->name('image.store');
});

Route::post('/product', [ProductController::class, 'store']);

Route::get('/product/create', function () {
    return view('create');
});

<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile.show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Create admin middleware group for products page in admin
// Route::resource('products', \App\Http\Controllers\ProductController::class)->middleware('auth');

//Test routes for products page in client

Route::get('/single-product', function () {
    return view('client.products.show');
});

Route::get('/products', function () {
    return view('client.products.index');
});

Route::get('/admin', function (){
    return view('admin.dashboard');
})->middleware('role:admin');

// Route::get('/products', 'App\Http\Controllers\ProductController@index');

// Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show');

Route::resource('products-admin', \App\Http\Controllers\ProductController::class);



<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
/*//Route::resource('profile', \App\Http\Controllers\UserController::class)->middleware(('auth'));

//Route::put('/profile.{user}', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth')

//Create admin middleware group for products page in admin
// Route::resource('products', \App\Http\Controllers\ProductController::class)->middleware('auth');

//Test routes for products page in client
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('/admin', function (){
    return view('admin.dashboard');
});
*/




/*Route::prefix('admin')->group(function () {
    Route::resource('/products', 'App\Http\Controllers\ProductController');

});
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('roles', \App\Http\Controllers\RoleController::class)->middleware('role:admin');
Route::resource('permissions', \App\Http\Controllers\PermissionController::class)->middleware('role:admin');
*/


Route::group(['middleware'=>'auth'], function() {
   
    Route::group(['prefix'=>'user'], function() {
Route::resource('profile', \App\Http\Controllers\UserController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
    });

Route::group(['middleware'=>'role:admin', 'prefix'=>'admin'],function (){
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    });
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
});

});

// Route::get('/products', 'App\Http\Controllers\ProductController@index');



// Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show');

// Route::resource('products', \App\Http\Controllers\ProductController::class);


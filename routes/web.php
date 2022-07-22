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
Route::get('/admin', function () {
    return view('pages.admin');
});

Route::get('/', function () {
    return view('pages.firstPage');
});

Route::get('/home', function () {
    return view('pages.firstPage');
});

Route::get('/story', function () {
    return view('pages.story');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/reservation/list',[\App\Http\Controllers\reservationController::class,'index']);
Route::get('/reservation',[\App\Http\Controllers\reservationController::class,'create']);
Route::post('/reservation',[\App\Http\Controllers\reservationController::class,'store']);
Route::get('/reservation/edit/{id}',[\App\Http\Controllers\reservationController::class,'edit']);
Route::put('/reservation/edit/{id}',[\App\Http\Controllers\reservationController::class,'update']);
Route::delete('/reservation/list',[\App\Http\Controllers\reservationController::class,'destroy']);

Route::get('/product/list',[\App\Http\Controllers\productController::class,'index']);
Route::get('/product/add',[\App\Http\Controllers\productController::class,'create']);
Route::post('/product/add',[\App\Http\Controllers\productController::class,'store']);
Route::get('/product/edit/{id}',[\App\Http\Controllers\productController::class,'edit']);
Route::put('/product/edit/{id}',[\App\Http\Controllers\productController::class,'update']);
Route::delete('/product/list',[\App\Http\Controllers\productController::class,'destroy']);

Route::resource('categories',\App\Http\Controllers\categoryController::class);

Route::get('product/list',[\App\Http\Controllers\userController\ajaxController::class,'index']);

Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

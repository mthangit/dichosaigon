<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



Route::get('/', function () {
    return redirect()->route('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// group function

Route::controller(ProductController::class)->group(function () {
    Route::get('/dashboard', 'Index')->name('dashboard');
    Route::get('/createpost', 'Create')->name('createpost');
    Route::post('search', 'Search')->name('search');
    Route::post('store', 'Store')->name('store');
    Route::get('/managepost', 'Manage')->name('managepost');
    Route::get('/editpost/{id}', 'Edit')->name('editpost');
    Route::post('update', 'Update')->name('update');
    Route::get('/delete/{productId}', 'Delete')->name('delete');
});

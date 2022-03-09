<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', 'DashboardController@index')->name('dashboard');


Auth::routes(['register' => false]);


Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');
Route::get('product/{id}/gallery', 'ProductController@gallery')->name('product.gallery');


Route::resource('transactions', 'TransactionController');
Route::get('transactions/{id}/set-status', 'TransactionController@setStatus')->name('transactions.status');
// Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Http\Controllers\Frontend\MasterController;
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

Route::get('/', [MasterController::class, 'home'])->name('home');
Route::get('/about-us', [MasterController::class, 'about_us'])->name('about_us');
Route::get('/services', [MasterController::class, 'services'])->name('services');
Route::get('/products', [MasterController::class, 'products'])->name('products');
Route::get('/news-and-updates', [MasterController::class, 'news_updates'])->name('news_updates');
Route::get('/contact-us', [MasterController::class, 'contact_us'])->name('contact_us');

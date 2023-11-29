<?php

use App\Http\Controllers\Admin\MasterController as AdminMasterController;
use App\Http\Controllers\Auth\AdminAuthController;
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
Route::post('/message-post', [MasterController::class, 'msg_post'])->name('msg_post');


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminMasterController::class, 'adminLoginPage'])->name('login-page');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login');

    Route::group(['middleware' => 'admin_auth_middleware'], function () {
        Route::group(['prefix' => '/dashboard'], function () {
            Route::name('admin.')->group(function () {
                Route::group(['prefix' => '/profile'], function () {
                    Route::get('/', [AdminMasterController::class, 'admin_profile'])->name('profile');
                    Route::put('/update', [AdminAuthController::class, 'profile_update'])->name('profile-update');

                    Route::get('/change-pass', [AdminMasterController::class, 'admin_change_pass'])->name('pass-change');
                    Route::put('/password-update/{user_id}', [AdminAuthController::class, 'admin_password_update'])->name('password-update');
                });
                Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
                Route::get('/', [AdminMasterController::class, 'index'])->name('dashboard');
                Route::get('/contact-messages', [AdminMasterController::class, 'contact_messages'])->name('contact_messages');
                Route::delete('/contact-messages-delete/{id}', [AdminMasterController::class, 'contact_messages_delete'])->name('contact_messages_delete');
            });
        });
    });
});

//email admin@gmail.com
// Route::get('/gen-pass', function () {
//     dd(Hash::make('admin'));
// });
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

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function() {
    Route::get('/', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/profile', 'DashboardController@profile')->name('profile');
    Route::post('/profile-save', 'DashboardController@general')->name('profile.save');
    Route::post('/password-save', 'DashboardController@password')->name('password.save');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/list', 'UserController@list')->name('list');
        Route::get('/add', 'UserController@add')->name('add');
        Route::get('/edit/{id?}', 'UserController@edit')->name('edit');
        Route::post('/save/{id?}', 'UserController@save')->name('save');
        Route::get('/delete/{id?}', 'UserController@delete')->name('delete');
    });
});


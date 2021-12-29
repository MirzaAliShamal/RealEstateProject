<?php

use App\Http\Controllers\RecordController;
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

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/show/{id}', 'DashboardController@show')->name('record.show');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('record.edit');
    Route::post('/save/{id}', 'DashboardController@save')->name('record.save');
    Route::get('/profile', 'DashboardController@profile')->name('profile');
    Route::post('/profile-save', 'DashboardController@general')->name('profile.save');
    Route::post('/password-save', 'DashboardController@password')->name('password.save');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/list', 'UserController@list')->name('list');
        Route::get('/details/{id?}', 'UserController@show')->name('show');
        Route::get('/add', 'UserController@add')->name('add');
        Route::get('/edit/{id?}', 'UserController@edit')->name('edit');
        Route::post('/save/{id?}', 'UserController@save')->name('save');
        Route::get('/delete/{id?}', 'UserController@delete')->name('delete');
    });

    Route::prefix('record')->name('record-history.')->group(function () {
        Route::get('/list', 'RecordController@list')->name('list');
        Route::get('/edit/{id?}', 'RecordController@editRecordHistory')->name('edit');
        Route::post('/update/{id?}', 'RecordController@updateRecordHistory')->name('update');
        Route::get('/approve-update/{id?}', 'RecordController@approve')->name('approve');
        Route::get('/reject-update/{id?}', 'RecordController@reject')->name('reject');
    });

    Route::prefix('record')->name('record.')->group(function () {
        Route::get('pdf/{id}', [RecordController::class, 'recordPdf'])->name('pdf');
        Route::get('history/pdf/{id}', [RecordController::class, 'recordHistoryPdf'])->name('history.pdf');
    });
});

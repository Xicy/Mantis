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

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/stats', 'DashboardController@stats')->name('stats');
    Route::get('/files', 'FileController@files')->name('files');
    Route::get('/deposit', 'DashboardController@deposit')->name('deposit');
    Route::get('/masternodes', 'DashboardController@masternodes')->name('masternodes');
    Route::get('/masternodes/me', 'DashboardController@mymasternodes')->name('mymasternodes');
    Route::get('/setup', function () {  return view('setup'); })->name('setup');

    Route::get('/download/{txid}','FileController@download')->name('download');
    Route::post('/masternode/activate','DashboardController@activateMasterNode')->name('activate');
    Route::post('/masternode/add','DashboardController@addMasternode')->name('addmasternode');
});
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','CreaController@Home')->name('home');
Route::get('/portfolio','CreaController@Portfolio')->name('portfolio');
Route::get('/contact','CreaController@Contact')->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

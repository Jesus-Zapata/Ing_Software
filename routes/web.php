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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/homeDonate', 'HomeController@show')->name("homeDonate");
Route::get('/history/show', 'HistoryController@show')->name("history.show");
Route::get('/history/create', 'CreateController@create')->name("history.create");
Route::get('/scores', 'PointsController@scores')->name("scores");
Route::post('/history/save', 'CreateController@save')->name("history.save");
Route::post('/homeDonate', 'HomeController@filtro')->name("filtro");


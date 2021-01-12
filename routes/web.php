<?php
use App\Admin;
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

// Route::post('/hangout/cteate', 'AdminsController@store');
// Route::get('/hangout/{hangout}/delete', 'AdminsController@delete');
// Route::get('/hangout', 'AdminsController@create')->name('hangout');

// Route::get('/hangout/{hangout}/edit', 'AdminsController@edit');
// Route::post('/hangout/{hangout}/update', 'AdminsController@update');

Route::get('/', function () {
    return view('welcome');
});

Route::post('/citizen/Create', 'CitizenController@store');
Route::get('/citizen/{citizen}/delete', 'CitizenController@delete');
Route::get('/citizen', 'CitizenController@create')->name('citizen');

Route::get('/citizen/{citizen}/edit', 'CitizenController@edit');
Route::post('/citizen/{citizen}/update', 'CitizenController@update');





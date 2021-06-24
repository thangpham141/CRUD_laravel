<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/user','UserController');

Route::put('/update/{id}','UserController@update');

Route::get('/customer','CustomerController@index')->name('customer.index');
Route::put('/customer/update/{id}','CustomerController@update')->name('customer.update');
Route::post('/customer/store','CustomerController@store')->name('customer.store');
Route::get('/customer/edit/{id}','CustomerController@edit')->name('customer.edit');
Route::get('/customer/show/{id}','CustomerController@show')->name('customer.show');
Route::delete('/customer/destroy/{id}','CustomerController@destroy')->name('customer.delete');

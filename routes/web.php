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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/try', 'TryController@index');

// admin
Route::get('/admin', 'userDetailsController@adminIndex')->name("admin");

// user 
Route::view('/details', 'details');
Route::post('/result', 'quoteController@show')->name("quote.show");
Route::get('/quote', 'quoteController@create');
Route::post('/test', 'quoteController@saveQuotation')->name("quote.store");

// user details
Route::get('/userDetails', 'userDetailsController@create')->name("user.detail");
//edit userDetail
Route::get('/userDetails/edit/{id}', 'userDetailsController@edit')->name("userDetail.edit");
Route::post('/userDetails/update/{id}', 'userDetailsController@update')->name("userDetail.update");

Route::post('/insertDetails', 'userDetailsController@store'); //add
Route::get('/viewUser', 'userDetailsController@index')->name("view.detail"); //retrieve


Route::delete('/userDetails/delete/{id}', 'userDetailsController@destroy')->name('userDetail.delete');

/*
1. Route using Controller 
Route::get('/link','NameController@functionName' );
2. Route using File Name 
Route::view('/link', 'folderName.fileName');
*/
// Route::get('/quote', 'quoteController@index');

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

Route::get('adm', function(){
    return view('adm.index');
})->name('adm.index');

Route::resource('/adm/products', 'ProductController');
Route::resource('/adm/artists', 'ArtistController');
Route::resource('/adm/categories', 'CategoryController');
Route::resource('/adm/colours', 'ColourController');
Route::resource('/adm/themes', 'ThemeController');
Route::resource('/adm/types', 'TypeController');


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

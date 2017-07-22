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

Route::get('/', function () {
    return view('landing');
});

Route::get('/upload', 'Uploader@view');

Route::get('/uploadImage', 'Uploader@index');
Route::post('/uploadImage', 'Uploader@index');
Route::patch('/uploadImage', 'Uploader@index');
Route::put('/uploadImage', 'Uploader@index');
// Route::head('/uploadImage', 'Uploader@initialize');

Route::get('/search', 'Search@index');

Route::get('/search/hue/{lower}/{upper}', ['as' => 'search', 'uses' => 'Search@searchInRange']);
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
    return view('welcome');
})->name('home');

Route::get('/membros', 'MembersController@index')->name('members');

Route::get('/contato', function () {
    return view('contact');
})->name('contact');

Route::get('/grupos', function () {
    return view('groups');
})->name('groups');

Route::get('/fotos', function () {
    return view('photos');
})->name('photos');

Route::get('/perfil', 'ProfileController@index')->name('profile');

Route::post('/logout', 'Controller@logout')->name('logout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

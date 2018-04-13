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

Route::get('/membros', function () {
    return view('members');
})->name('members');

Route::get('/contato', function () {
    return view('contact');
})->name('contact');

Route::get('/grupos', function () {
    return view('groups');
})->name('groups');

Route::get('/fotos', function () {
    return view('photos');
})->name('photos');

Route::get('/perfil', function () {
    return view('profile');
})->name('profile');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

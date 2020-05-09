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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','ControllerEstudante@index')->name('home1');
Route::get('/create','ControllerEstudante@create')->name('create');
Route::post('/create', 'ControllerEstudante@store')->name('store');
Route::get('/edit/{id}', 'ControllerEstudante@edit')->name('edit');
Route::post('/update/{id}', 'ControllerEstudante@update')->name('update');
//Route::get('/delete/{id}', 'ControllerEstudante@delete')->name('delete');
Route::post('/delete/{id}', 'ControllerEstudante@delete')->name('delete');

Route::get('/teste','TestController@index');
Route::get('/hello',function(){
    return "Ola mundo";
});

Route::get('/users/{id}',function($id){
    return "O id do usuario é: ".$id;
});



Auth::routes();

Route::get('/home', 'ControllerEstudante@index')->name('home');
Route::get('/change-password','Auth\ChangePasswordController@index')->name('passwords.change');
Route::post('/change-password','Auth\ChangePasswordController@update')->name('passwords.update');

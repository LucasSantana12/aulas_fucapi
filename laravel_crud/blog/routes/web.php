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

Route::get('/','ControllerEstudante@index')->name('home');
Route::get('/create','ControllerEstudante@create')->name('create');
Route::post('/create', 'ControllerEstudante@store')->name('store');

Route::get('/teste','TestController@index');
Route::get('/hello',function(){
    return "Ola mundo";
});

Route::get('/users/{id}',function($id){
    return "O id do usuario é: ".$id;
});



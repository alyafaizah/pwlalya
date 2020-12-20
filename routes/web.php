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

//
Route::get('/', function () {
    return view ('welcome');
});


Route::  get('/coba',function(){
    $x=1;
    $y=2;
    $hasil=$x+$y;
    return"nilai dari x+y = ".$hasil;
});

Route:: get('coba1','Tugas@jumlah');

//blade di luar folder
Route::get('/hello',function(){
    return view('hello',['name' => 'Alya']);
});

//blade di dalam folder
Route::get('/helloworld', function () {
    return view('blog.helloword', ['name' => 'Faizah']);
    });
   
//memanggil view dengan controller
    Route::get('/helloController','WelcomeController@hello');

//tubes pwl
Route::get('/home',"BodyController@home");
Route::get('/ladies',"BodyController@ladies");
Route::get('/men',"BodyController@men");
Route::get('/shop',"BodyController@shop");
Route::get('/shop2',"BodyController@shop2");
Route::get('/shop3',"BodyController@shop3");
Route::get('/form',"BodyController@form");
Route::get('/formsignin',"BodyController@formsignin");
Route::get('/saleLadies',"BodyController@saleLadies");
Route::get('/saleMen',"BodyController@saleMen");
//crud
Route::get('/databarang','AdminController@index')->name('databarang');
Route::get('/tambahbarang','AdminController@create')->name('tambahbarang');
Route::post('/simpanbarang','AdminController@store')->name('simpanbarang');
Route::get('/editdata/{id}','AdminController@edit')->name('editdata');
Route::post('/update/{id}','AdminController@update')->name('update');
Route::get('/delete/{id}','AdminController@destroy')->name('delete');


//tubes desIn
/*Route::get('/desin',"KeretaController@desin");
Route::get('/signin',"KeretaController@signin");
Route::get('/riwayat',"KeretaController@riwayat");
Route::get('/berhasil',"KeretaController@berhasil");
Route::get('/batal',"KeretaController@batal");
Route::get('/detail',"KeretaController@detail");
Route::get('/home',"KeretaController@home");
Route::get('/home1',"KeretaController@home1");
Route::get('/setting',"KeretaController@setting");
Route::get('/profil',"KeretaController@profil");*/

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


Route::get("/", "HomeController@index");

Route::get("/mkelas", "adminController@masterkelas")->middleware('admin');
Route::resource("/mmapel", "mmapelController")->middleware('admin');
Route::resource("/mguru", "mguruController")->middleware('admin');
Route::resource("/datasiswa", "siswaController")->middleware('admin');
Route::resource("/mjurusan", "jurusanController")->middleware('admin');
Route::resource("/mkelas", "kelasController")->middleware('admin');;



Route::resource("/profile", "profileguruController")->middleware('guru');
Route::get("/login", "loginController@index")->name('login')->middleware('guest');
Route::get("/logout", "loginController@logout");
Route::post("/login", "loginController@authenticate");

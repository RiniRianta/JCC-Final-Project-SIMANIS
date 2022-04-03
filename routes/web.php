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


Route::get("/", "HomeController@admin")->middleware('admin');
Route::get("/", "HomeController@dashboard")->middleware('guru');
Route::get("/mkelas", "adminController@masterkelas")->middleware('admin');
Route::get("/mmapel", "adminController@mastermapel")->middleware('admin');;

Route::get('/guru/absensi/findMapel/{id}', "absensiController@findMapel");
Route::get('/guru/absensi/findSiswa/{id}', "absensiController@findSiswa");
Route::resource("/mguru", "mguruController")->middleware('admin');
Route::resource("/guru/profile", "profileguruController");
Route::resource("/datasiswa", "siswaController")->middleware('admin');;
Route::resource("/mjurusan", "jurusanController")->middleware('admin');
Route::resource("/operator/relasi", "relasikelasController");
Route::resource("/operator/relasi/guru", "RelasiguruController");
Route::resource("/mkelas", "kelasController")->middleware('admin');;
Route::get("/login", "loginController@index")->name('login')->middleware('guest');
Route::get("/logout", "loginController@logout");
Route::post("/login", "loginController@authenticate");
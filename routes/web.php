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
Route::get("/admin", "adminController@home");
Route::get("/admin/mjurusan", "adminController@masterjurusan");
Route::get("/admin/mkelas", "adminController@masterkelas");
Route::get("/admin/mguru", "adminController@masterguru");
Route::get("/admin/mmapel", "adminController@mastermapel");
Route::get("/guru", "HomeController@guru");
Route::get("/operator", "HomepageController@dasboard");
Route::resource("/guru/profile", "profileguruController");
Route::resource("/guru/datasiswa", "siswaController");
Route::resource("/guru/absensi", "absensiController");
Route::resource("/operator/relasi", "relasikelasController");

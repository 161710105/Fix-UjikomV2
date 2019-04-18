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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function () {

Route::resource('jabatan','JabatanController');
Route::resource('divisi','DivisiController');
Route::resource('departemen','DepartemenController');
Route::resource('karyawan','KaryawanController');
Route::resource('cuti','CutiController');
Route::resource('gaji','GajiController');
Route::resource('hrd', 'HrdController');

});

Route::group(['prefix'=>'hrd', 'middleware'=>['auth','role:hrd|admin']], function () {

Route::resource('karyawan','KaryawanController');
Route::resource('gaji','GajiController');

});

Route::get('gaji/report/{view_type}','GajiController@report');
Route::get('/slipgaji/{id}','GajiController@slipgaji')->name('slipgaji');
Route::get('gaji/getKaryawan','GajiController@getKaryawan');

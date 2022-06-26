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

Route::get('/', function () {
    return view('welcome');
});


Route::get('mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::post('mahasiswa/create','App\Http\Controllers\MahasiswaController@create');
Route::get('mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('mahasiswa/update/{id}','App\Http\Controllers\MahasiswaController@update')->name('mahasiswa.update');
Route::post('mahasiswa/delete/{id}','App\Http\Controllers\MahasiswaController@destroy')->name('mahasiswa.destroy');
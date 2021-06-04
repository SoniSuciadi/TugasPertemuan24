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
Route::get('/mahasiswa/insert',[\App\Http\Controllers\MahasiswaController::class,'insert']);
Route::get('/mahasiswa/update',[\App\Http\Controllers\MahasiswaController::class,'update']);
Route::get('/mahasiswa/delete',[\App\Http\Controllers\MahasiswaController::class,'delete']);
Route::get('/mahasiswa/select',[\App\Http\Controllers\MahasiswaController::class,'select']);

Route::get('/mahasiswa/insert-qb',[\App\Http\Controllers\MahasiswaController::class,'insertQb']);
Route::get('/mahasiswa/update-qb',[\App\Http\Controllers\MahasiswaController::class,'updateQb']);
Route::get('/mahasiswa/delete-qb',[\App\Http\Controllers\MahasiswaController::class,'deleteQb']);
Route::get('/mahasiswa/select-qb',[\App\Http\Controllers\MahasiswaController::class,'selectQb']);

Route::get('/mahasiswa/insert-elq',[\App\Http\Controllers\MahasiswaController::class,'insertElq']);
Route::get('/mahasiswa/update-elq',[\App\Http\Controllers\MahasiswaController::class,'updateElq']);
Route::get('/mahasiswa/delete-elq',[\App\Http\Controllers\MahasiswaController::class,'deleteElq']);
Route::get('/mahasiswa/select-elq',[\App\Http\Controllers\MahasiswaController::class,'selectElq']);

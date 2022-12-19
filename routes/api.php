<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('siswa', [SiswaController::class, 'index']); //
Route::post('siswa', [SiswaController::class, 'create']); //
Route::get('/siswa/{id}', [SiswaController::class, 'detail']); //
Route::put('/siswa/{id}', [SiswaController::class, 'update']);//
Route::delete('/siswa/{id}', [SiswaController::class, 'delete']);

// Route::get('kelas', [KelasController::class, 'index']); //
Route::get('/kelas', 'KelasController@index');
Route::post('/kelas', 'KelasController@create');
Route::get('/kelas/{id}', 'KelasController@detail');
Route::put('/kelas/{id}', 'KelasController@update');
Route::delete('/kelas/{id}', 'KelasController@delete');

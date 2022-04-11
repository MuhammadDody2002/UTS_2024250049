<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\MataKuliahController;

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
    return view('index');
});

Route::get('programstudi', [ProgramStudiController::class, 'index']);
Route::get('programstudi/detail/{id}', [ProgramStudiController::class, 'detail'])->name('detail-prodi');

Route::get('matakuliah', [MataKuliahController::class, 'index']);
Route::get('matakuliah/detail/{id}', [MataKuliahController::class, 'detail'])->name('detail-mk');

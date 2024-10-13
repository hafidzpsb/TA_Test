<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterIndicatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/impor_data/master_indikator', function () {
    return view('impor_data.master_indikator');
});
Route::get('/import/master-indikator', [MasterIndicatorController::class, 'showImportForm'])->name('import.master.indikator.form');
Route::post('/import/master-indikator', [MasterIndicatorController::class, 'import'])->name('import.master.indikator');
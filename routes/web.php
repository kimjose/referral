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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit_patient', [\App\Http\Controllers\Web\PatientsController::class, 'editPatient'])->name('edit_patient');
Route::get('/patients', [\App\Http\Controllers\Web\PatientsController::class, 'patientsList'])->name('patients');
//Transfers
Route::get('/active_transfers', [\App\Http\Controllers\Web\TransfersController::class, 'activeTransfers'])->name('active_transfers');
Route::get('/edit_transfers', [\App\Http\Controllers\Web\TransfersController::class, 'editTransfer'])->name('edit');
Route::get('/transfer_ins', [\App\Http\Controllers\Web\TransfersController::class, 'transferIns'])->name('transfer_ins');
Route::get('/transfer_outs', [\App\Http\Controllers\Web\TransfersController::class, 'transferOuts'])->name('transfer_outs');

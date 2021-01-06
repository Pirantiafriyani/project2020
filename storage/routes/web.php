<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\LoketController;
use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
    return view('auth/new/login');

Route::get('/loket',[LoketController::class, 'index'])->name('loket.index');
    

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ---------------------------------------------------------------------------------
// layouts
Route::get('/monitoring',[MonitoringController::class, 'index'])->name('monitoring.index');

// ---------------------------------------------------------------------------------
Route::get('/laporan',[LaporanController::class, 'index'])->name('laporan.index');

// ---------------------------------------------------------------------------------
// loket
Route::get('/loket',[LoketController::class, 'index'])->name('loket.index');
Route::post('/loket', [LoketController::class, 'store'])->name('loket.store');
Route::delete('/loket{loket}/delete', [LoketController::class, 'destroy'])->name('loket.destroy');
Route::patch('/loket/{id}/update',[LoketController::class, 'update'])->name('loket.update');


// ---------------------------------------------------------------------------------
// Arsip
Route::get('/arsip',[ArsipController::class, 'index'])->name('arsip.index');



Route::get('logout', function ()
{
    Auth::logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');


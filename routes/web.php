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
Route::get('/bill',[App\Http\Controllers\BillController::class, 'create'])->name('bills');
Route::post('/bill_store',[App\Http\Controllers\BillController::class, 'store'])->name('billStore');
Route::get('/update/full',[App\Http\Controllers\DataController::class, 'create'])->name('full');
Route::post('/update',[App\Http\Controllers\DataController::class, 'store'])->name('store');
Route::get('/show',[App\Http\Controllers\DataController::class, 'show'])->name('show');
Route::get('edit/{id}',[App\Http\Controllers\DataController::class, 'edit'])->name('edit');
Route::post('update_bill{id}',[App\Http\Controllers\DataController::class, 'update'])->name('update_bill');

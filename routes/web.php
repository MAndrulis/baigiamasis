<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundController as I;

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


Route::prefix('funds')->name('invoices-')->group(function () {
    Route::get('/', [I::class, 'index'])->name('index'); //all fund
    Route::get('/show/{fund}', [I::class, 'show'])->name('show'); //show one fund

    Route::get('/create', [I::class, 'create'])->name('create'); //show create form
    Route::get('/edit/{fund}', [I::class, 'edit'])->name('edit'); // show edit form
    Route::get('/delete/{fund}', [I::class, 'delete'])->name('delete'); //show delete confirmation

    Route::post('/', [I::class, 'store'])->name('store'); // store new fund
    Route::put('/{fund}', [I::class, 'update'])->name('update'); // update existing fund
    Route::delete('/{fund}', [I::class, 'destroy'])->name('destroy'); // delete existing fund
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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



Route::get('/', [ContactController::class, 'create'])->name('create.contact');


Route::group(['prefix' => 'contact'], function () {

    Route::any('create', [ContactController::class, 'create'])->name('create.contact');

    Route::post('save', [ContactController::class, 'store'])->name('save.contact');

});

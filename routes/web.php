<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FormController::class, 'index']);
Route::get('/customer', [FormController::class, 'index']);
Route::get('/detail/{id}', [FormController::class, 'detail']);



Route::get('/test', function () {
    return view('layout.app');
});

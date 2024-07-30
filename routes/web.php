<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Auth;

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

Route::controller(C_Auth::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
});

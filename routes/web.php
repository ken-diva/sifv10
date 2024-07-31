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

Route::controller(C_Sdm::class)->group(function () {
    Route::get('/sdm/dashboard', 'index');
    Route::get('/sdm/data-dosen', 'table_dosen');
    Route::post('/sdm/data-dosen-filtered', 'table_dosen_filtered');
    Route::get('/sdm/profile-dosen/{name}', 'profile_dosen');
    Route::get('/sdm/data-tpa', 'table_tpa');
    Route::get('/sdm/profile-tpa/{name}/{unitname}/{employmentstatus}', 'profile_tpa');
});

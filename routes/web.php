<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    JurusanController,
    SiswaController,
    DashboardController,
};
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Route login admin

// Route::get('/login', [AuthController::class, 'index'])->name('login');

//Route jurusan
Route::resource('/jurusan', JurusanController::class);

// Route siswa
Route::resource('/siswa', SiswaController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', [LoginController::class, "login"])->name('login');


Route::post('/login', [AuthController::class, "login"])->name('loginProses');

Route::get('/dashboard', function () { return view('isidashboard'); })->name('dashboard');
Route::get('/dashboarduser', function () { return view('dashboarduser'); })->name('dashboardUser');

Route::get('/kategori', [KategoriController::class, "index"])->name('kategori');

Route::get('/editkategori/{id}', [KategoriController::class, "edit"])->name('editkategori');
Route::get('/deletekategori/{id}', [KategoriController::class, "delete"])->name('deletekategori');
Route::post('/updatekategori/{id}', [KategoriController::class, "update"])->name('updatekategori');
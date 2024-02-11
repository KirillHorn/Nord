<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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



Route::get('/', [MainController::class, "index"]);

Route::get('/personal_data', function () {
    return view('personal_data');
});

Route::get('/sign_in', [AuthController::class, "sign_in"]);
Route::get('/sign_up', [AuthController::class, "sign_up"]);
Route::post('/sign_in_validate', [AuthController::class, 'sign_in_validate']);
Route::post('/sign_up_validate', [AuthController::class, 'sign_up_validate']);
Route::get('/sign_out', [AuthController::class, 'sign_out']);

Route::get('/bookingpersonal', [MainController::class, 'bookingpersonal']);
Route::get('/add_money', [MainController::class, 'add_money']);
Route::patch('/add_money', [MainController::class, 'balance'])->name('balance');

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/booking', [AdminController::class, 'booking']);
Route::get('/admin/{id}/edit', [AdminController::class, 'edit']);
Route::post('/{id}/edit_reduct', [AdminController::class, 'edit_reduct']);

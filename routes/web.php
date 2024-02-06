<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/personal_data', function () {
    return view('personal_data');
});

Route::get('/sign_in', [AuthController::class, "sign_in"]);
Route::get('/sign_up', [AuthController::class, "sign_up"]);
Route::post('sign_in_validate', [AuthController::class, 'sign_in_validate']);
Route::post('sign_up_validate', [AuthController::class, 'sign_up_validate']);
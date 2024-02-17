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

//Регистрация , авторизация и выход
Route::get('/sign_in', [AuthController::class, "sign_in"]);
Route::get('/sign_up', [AuthController::class, "sign_up"]);
Route::post('/sign_in_validate', [AuthController::class, 'sign_in_validate']);
Route::post('/sign_up_validate', [AuthController::class, 'sign_up_validate']);
Route::get('/sign_out', [AuthController::class, 'sign_out']);

//Баланс
Route::get('/bookingpersonal', [MainController::class, 'bookingpersonal']);
Route::get('/add_money', [MainController::class, 'add_money']);
Route::patch('/add_money', [MainController::class, 'balance'])->name('balance');

//Сторона админа:
Route::get('/admin', [AdminController::class, 'index']); //страница тарифов
Route::get('/admin/booking', [AdminController::class, 'booking']); //Страница всех забронированных мест
Route::get('/admin/{id}/edit', [AdminController::class, 'edit']); //страница определенного тарифа
Route::post('/{id}/edit_reduct', [AdminController::class, 'edit_reduct']); //функция редактирования тарифа
Route::get('/admin/places', [AdminController::class, 'places']); //страница добавление места
Route::get('/admin/editplaces', [AdminController::class, 'edit_places']); //страница добавление места
Route::post('/edit_places_validate', [AdminController::class, 'edit_places_validate']); //функция добавление места
Route::get('/{id}/delete_places', [AdminController::class, 'delete_places']); //страница добавление места

//Бронирование:
Route::get('placees', [MainController::class, 'placees_view']); //открытие страница со всеми местами
Route::post('places_id', [MainController::class, 'placees_view'])->name('places_id'); //передача id  в определенное модальное окно
Route::post('/booking_Create', [MainController::class, 'booking_Create']); //оформление бронирования
Route::get('/placees', [MainController::class, 'placees_view'])->name('placees');

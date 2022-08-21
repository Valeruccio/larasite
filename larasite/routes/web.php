<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
//Роут на метод
Route::get('/', [MainController::class, 'home']);

//Обычная ссылка на страницу
Route::get('/about', [MainController::class, 'about']);

//Ревью
Route::get('/rewiew', [MainController::class, 'rewiew']);

////Ссылка на страницу с optional_param
//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'Имя пользователя: ' . $name;
//});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('Home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/regester', function () {
    return view('regester');
});
Route::get('/login/view', [UserController::class, 'view']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/academics', function () {
    return view('academics');
});
Route::get('/research', function () {
    return view('research');
});
Route::get('/ugadmission', function () {
    return view('ugadmission');
});
Route::get('/pgadmission', function () {
    return view('pgadmission');
});
Route::get('/jobaplication', function () {
    return view('jobaplication');
});

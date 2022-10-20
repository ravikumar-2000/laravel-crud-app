<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', ['users' => [],]);
})->name('home');

Route::get('/users/login', [UserController::class, 'login'])->name('users.login');
Route::post('/users/loginUser', [UserController::class, 'loginUser'])->name('users.loginUser');
Route::get('/users/logoutUser', [UserController::class, 'logoutUser'])->name('users.logoutUser');

Route::resource('users', UserController::class);

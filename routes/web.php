<?php

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

/* rotas do site */
Route::get('/', function () {
    return view('site.index');
})->name('site.index');

/* Rotas do Login*/
Route::get('/login', 'Dashboard\AuthController@showLoginForm')->name('login');
Route::post('/login/do', 'Dashboard\AuthController@login')->name('login.do');

/* Rotas do Dashboard */
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/dashboard/perfil', function() {
    return view('dashboard.account');
})->name('dashboard.account');


Route::get('/dashboard/usuarios', 'Dashboard\userController@users')->name('dashboard.users');
Route::get('/dashboard/novo-usuario', 'Dashboard\userController@showRegisterForm')->name('registerUser');
Route::post('/dashboard/novo-usuario/do', 'Dashboard\userController@register')->name('registerUser.do');

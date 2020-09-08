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
Route::get('/logout', 'Dashboard\AuthController@logout')->name('logout');

/* Rotas do Dashboard */
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    })->name('dashboard.index');

    //rotas de Usuarios
    Route::get('/dashboard/perfil', 'Dashboard\userController@account')->name('dashboard.account');
    Route::get('/dashboard/usuarios', 'Dashboard\userController@users')->name('dashboard.users');
    Route::get('/dashboard/novo-usuario', 'Dashboard\userController@showRegisterForm')->name('registerUser');
    Route::post('/dashboard/novo-usuario/do', 'Dashboard\userController@register')->name('registerUser.do');

    //rotas de Clientes
    Route::get('/dashboard/clientes', 'Dashboard\clientController@clients')->name('dashboard.clients');
    Route::get('/dashboard/novo-cliente', 'Dashboard\clientController@showRegisterForm')->name('registerClient');
    Route::post('/dashboard/novo-cliente/do', 'Dashboard\clientController@register')->name('registerClient.do');

    //rotas de Email
    Route::get('/dashboard/emails', function () {
        return view('dashboard.emails');
    })->name('dashboard.emails');

    //rotas de Pontos
    Route::get('/dashboard/pontos', function () {
        return view('dashboard.rewards');
    })->name('dashboard.rewards');
});
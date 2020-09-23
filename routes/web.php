<?php

use App\Jobs\newDmaisOil;
use Illuminate\Support\Facades\Mail;
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
Route::get('/', function(){
    return view('site.index');
})->name('site.index');

/* Rotas do Login*/
Route::get('/login', 'Dashboard\AuthController@showLoginForm')->name('login');
Route::post('/login/do', 'Dashboard\AuthController@login')->name('login.do');
Route::get('/logout', 'Dashboard\AuthController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    })->name('dashboard.index');


    //rotas de usuário
    Route::get('/dashboard/perfil', 'Dashboard\UserController@account')->name('user.account');
    Route::resource('/dashboard/usuarios', 'Dashboard\UserController')->names('user')->parameters(['usuarios' => 'user']);
    
    //rotas de clientes
    Route::resource('/dashboard/clientes', 'Dashboard\ClientController')->names('client')->parameters(['clientes' => 'client']);
    
    //rotas de Veiculos
    Route::post('/dashboard/veiculos/{client}', 'Dashboard\VehicleController@store')->name('vehicle.store');
    Route::resource('/dashboard/veiculos', 'Dashboard\VehicleController')->names('vehicle')->parameters(['veiculos' => 'vehicle'])->except(['store',]);;

    //rotas de Email
    Route::get('/dashboard/emails', function () {
        return view('dashboard.emails');
    })->name('dashboard.emails');

    //rotas de Pontos
    Route::get('/dashboard/pontos', function () {
        return view('dashboard.rewards');
    })->name('dashboard.rewards');
});


Route::get('envio-email', function () {
    //return new \App\Mail\newDmaisOIl();
    newDmaisOil::dispatch()->delay(now()->addSeconds(15));
});
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

Route::get('/', function () { return view('dashboard'); });
Route::get('/home', function () { return view('dashboard'); });

Route::group(['namespace' => '\App\Http\Controllers'], function() {
    Route::resources([
        'usuarios' => UsuariosController::class,
        'departamentos' => DepartamentosController::class,
        'turnos' => TurnosController::class,
        '/' => DashboardController::class,
        '/home' => DashboardController::class,
        'movimentacoes' => MovimentacaoController::class,
    ]);
});

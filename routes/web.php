<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstatisticaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('site.home');
    Route::get('/jagestetica/login','login')->name('site.loginForm');
});
Route::controller(LoginController::class)->group(function(){
    Route::get('/dashboard','index')->name('site.dashboard');
    Route::post('/sessao','login')->name('site.loginsessao');
    Route::get('/terminar','destroy')->name('site.loginterminar')->middleware('auth');;
});

Route::controller(UserController::class)->group(function(){
    Route::get('/funcionario','index')->name('site.listarUsuarios')->middleware('auth');
    Route::get('/jagestetica/admin/cadastrofuncionario','create')->name('site.cadastrarfuncionario')->middleware('auth');;
    Route::get('/jagestetica/admin/perfilfuncionario/{usuario}','show')->name('site.perfilusuario')->middleware('auth');;
    Route::post('/jagestetica/admin/pesistirfuncionario','store')->name('site.persistirusuario')->middleware('auth');;
    Route::post('/jagestetica/admin/editarfuncionario/{id}','edit')->name('site.editarusuario')->middleware('auth');;
    Route::put('/jagestetica/admin/actualizarfuncionario/{usuario}','update')->name('site.actualizarusuario')->middleware('auth');;
});
Route::controller(ServicoController::class)->group(function(){
    Route::get('/servico','index')->name('site.listarServicos')->middleware('auth');
    Route::get('/servico/jagestetica/admin/cadastroservico','create')->name('site.cadastrarservico')->middleware('auth');
    Route::get('/servico/jagestetica/admin/verservico/{servico}','show')->name('site.verservico')->middleware('auth');
    Route::post('/servico/jagestetica/admin/pesistirservico','store')->name('site.persistirservico')->middleware('auth');
    Route::post('/servico/jagestetica/admin/editarservico/{servico}','edit')->name('site.editarservico')->middleware('auth');
    Route::put('/servico/jagestetica/admin/actualizarservico/{servico}','update')->name('site.actualizarservico')->middleware('auth');
});
Route::controller(ClientController::class)->group(function(){
    Route::get('/cliente','index')->name('site.listarClientes')->middleware('auth');;
    Route::get('/cliente/jagestetica/admin/cadastrocliente','create')->name('site.cadastrarcliente')->middleware('auth');
    Route::get('/cliente/jagestetica/admin/vercliente/{cliente}','show')->name('site.vercliente')->middleware('auth');
    Route::post('/cliente/jagestetica/admin/pesistircliente','store')->name('site.persistircliente')->middleware('auth');
    Route::post('/cliente/jagestetica/admin/editarcliente/{cliente}','edit')->name('site.editarcliente')->middleware('auth');
    Route::put('/cliente/jagestetica/admin/actualizarcliente/{cliente}','update')->name('site.actualizarcliente')->middleware('auth');
});
Route::controller(AgendaController::class)->group(function(){
    Route::get('/agenda','index')->name('site.listaragenda')->middleware('auth');
    Route::get('/agenda/jagestetica/admin/cadastroagenda','create')->name('site.cadastraagenda')->middleware('auth');
    Route::get('/agenda/jagestetica/admin/veragenda/{agenda}','show')->name('site.veragenda')->middleware('auth');
    Route::post('/agenda/jagestetica/admin/pesistiragenda','store')->name('site.persistiragenda')->middleware('auth');
    Route::post('/agenda/jagestetica/admin/editaragenda/{agenda}','edit')->name('site.editaragenda')->middleware('auth');
    Route::put('/agenda/jagestetica/admin/actualizaragenda/{agenda}','update')->name('site.actualizaragenda')->middleware('auth');
});
Route::controller(EstatisticaController::class)->group(function(){
    Route::get('/estatistica','dashboard')->name('site.estatistica')->middleware('auth');
});

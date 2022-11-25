<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
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

// Route::get('/', function () {
//     return "Bem-vindo!";
// });

Route::get('/',[PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[ContatoController::class,'salvar'])->name('site.contato');
Route::get('/login', function() { return "Login"; });

//app
Route::prefix('app')->group(function() {
    Route::get('/clientes', function() { return "Clientes"; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', function() { return "Produtos"; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[TesteController::class,'teste'])->name('teste');

Route::fallback(function () {
    echo"A rota acessada não existe. <a href=".route('site.index').">Clique aqui </a> para voltar";
});


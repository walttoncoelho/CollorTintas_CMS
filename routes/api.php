<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SobreEmpresaController;
use App\Http\Controllers\Api\ProdutosController;
use App\Http\Controllers\Api\NoticiasController;
use App\Http\Controllers\Api\BannerHomeController;
use App\Http\Controllers\Api\DadosEmpresaController;
use App\Http\Controllers\Api\FormaPagamentoController;
use App\Http\Controllers\Api\RedeSocialController;


Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/sobre-empresa', [SobreEmpresaController::class, 'index']);
Route::get('/noticias', [NoticiasController::class, 'index']);
Route::get('/noticias/{slug}', [NoticiasController::class, 'show']);
Route::get('/banner-topo', [BannerHomeController::class, 'index']); // Rota para listar todos os banners
Route::get('/banners/{id}', [BannerHomeController::class, 'show']); // Rota para exibir um banner específico
Route::get('/dados-empresa', [DadosEmpresaController::class, 'index']);
Route::get('/dados-empresa/{id}', [DadosEmpresaController::class, 'show']);
Route::get('/forma-pagamento', [FormaPagamentoController::class, 'index']);
Route::get('/forma-pagamento/{id}', [FormaPagamentoController::class, 'show']);
Route::get('/rede-social', [RedeSocialController::class, 'index']);
Route::get('/rede-sociail/{id}', [RedeSocialController::class, 'show']);



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

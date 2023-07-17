<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrianguloController;
use App\Http\Controllers\RetanguloController;
use App\Http\Controllers\AreaController;
use App\Models\Retangulo;
use App\Models\Triangulo;

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

//Rota que registra o triangulo no banco de dados
Route::post('/triangulo', [TrianguloController::class, 'store']);

//Rota que registra o retangulo no banco de dados
Route::post('/retangulo', [RetanguloController::class, 'store']);

//Rota para retornar a soma das áreas de todos os poligonos registrados no banco de dados
Route::get('area-total', [AreaController::class,'areaTotal']);


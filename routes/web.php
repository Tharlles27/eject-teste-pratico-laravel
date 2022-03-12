<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VeiculoController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    

    Route::prefix('veiculo')->group(function () {
        Route::get('/registro', [VeiculoController::class, 'create'])->name('registro_veiculo');
        Route::post('/registro', [VeiculoController::class, 'store'])->name('registro_veiculo');
    });
});   

require __DIR__.'/auth.php';

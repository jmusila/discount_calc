<?php

use App\Http\Controllers\FrontEnd\CalculatorController;
use App\Http\Controllers\GiftCalculatorController;
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

Route::get('/', [CalculatorController::class, 'index']);

Route::post('/payment_calculation', [GiftCalculatorController::class, 'getCalculation']);

Route::post('/redirect_back', function () {
    return redirect('/');
});

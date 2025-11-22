<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcController;

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


Route::get('/', [EcController::class, 'index']);
Route::get('/contacts', [EcController::class, 'contact']);
Route::post('/contacts/confirm', [EcController::class, 'confirm']);
Route::post('/contacts', [EcController::class, 'store']);
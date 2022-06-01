<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create', [MessageController::class, 'create']);
Route::get('/messages', [MessageController::class, 'showAll']);
Route::get('/message/{id}', [MessageController::class, 'details']);
Route::delete('/message/{id}', [MessageController::class, 'delete']);
Route::post('/update/{id}', [MessageController::class, 'update']);

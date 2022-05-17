<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\MovieController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/movies',  [MovieController::class, 'index']);
Route::get('/moviesBy/{filter}',  [MovieController::class, 'filterBy']);
Route::get('movies/{movie}',  [MovieController::class, 'show']);
Route::post('movies',  [MovieController::class, 'store']);
Route::put('movies/{movie}',  [MovieController::class, 'update']);
Route::delete('movies/{movie}',  [MovieController::class, 'destroy']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     Route::resources([
//         'user' => Api\UserController::class,
//     ]);
//     return $request->user();
// });
Route::post('/login', [ApiController::class, 'login']);
Route::group(['middleware' => 'auth:api'], function ($router) {
    Route::resources([
        'user' => ApiController::class,
    ]);
    Route::get('/me', [ApiController::class, 'me']);
  });
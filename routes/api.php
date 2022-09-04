<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\ContentController;

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

Route::middleware('auth:sanctum')->get('/whoami', function (Request $request) {

   //    'token' => $request->bearerToken(),

   return  $request->user();
});



Route::apiResource('words', WordController::class)->middleware('auth:sanctum');
/**
 * /contents
 * /records
 * 
 */
Route::apiResource('content', ContentController::class)->middleware('auth:sanctum'); 
// ->except([ 'destroy','update']);;



//  A8E6YziXl3RmoYAq1LjIH8f8LZtEbrDDsOEqAs8i


//// 
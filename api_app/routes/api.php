<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\comcontroller;
use App\Http\Controllers\empcontroller;
use App\Models\commimol_;

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

Route::get('/post/list',[PostController::class,'index']);

Route::post('/post/create',[PostController::class,'store']);

Route::put('/post/update/{id}',[PostController::class,'update']);

Route::delete('/post/delete/{id}',[PostController::class,'delete']);

// company 
Route::get('/listcom',[comcontroller::class,'indexcom']);

Route::post('/createcom',[comcontroller::class,'storecom']);

Route::put('/updatecom/{id}',[comcontroller::class,'updatecompany']);

Route::delete('/deletecom/{id}',[comcontroller::class,'deletecom']);

// employees
Route::get('/listemp',[empcontroller::class,'indexemp']);

Route::post('/createemp',[empcontroller::class,'storeemp']);

Route::put('/updateemployees/{id}',[empcontroller::class,'updateemp']);

Route::delete('/deleteemp/{id}',[empcontroller::class,'deleteemp']);



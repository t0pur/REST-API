<?php

use App\Http\Controllers\Api\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('toporek/305419/people', [PeopleController::class, 'index']);
Route::get('toporek/305419/people/{people}', [PeopleController::class, 'read']);
Route::post('toporek/305419/people', [PeopleController::class, 'create']);
Route::put('toporek/305419/people/{people}', [PeopleController::class, 'update']);
Route::delete('toporek/305419/people/{people}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

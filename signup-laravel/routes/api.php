<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupTask2Controller;

use App\Http\Controllers\MailSentController;

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


Route::get('/countries', [SignupTask2Controller::class, 'getAllCountries']);
Route::get('/regions', [SignupTask2Controller::class, 'getAllRegions']);
Route::post('/save-form', [SignupTask2Controller::class, 'saveFormData']);



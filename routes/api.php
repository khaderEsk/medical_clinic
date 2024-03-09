<?php

use App\Http\Controllers\auth\DescriptionController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\PatientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::controller(PatientsController::class)->group(function () {

    Route::get('/get', 'index');
    Route::post('createPatient', 'store');
    
    Route::get('/getPatient', 'index')->name('getPatient');
    
    Route::get('show/{id}', 'show')->name('show');
});

Route::controller(DescriptionController::class)->group(function () {
    Route::get('/description', 'index')->name('description');
    Route::post('/addDescription', 'store');
});



Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
<?php

use App\Http\Controllers\auth\AppointmentController;
use App\Http\Controllers\auth\DescriptionController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\PatientsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});



Route::controller(PatientsController::class)->group(function () {

    Route::get('/getPatient', 'index')->name('getPatient');

    Route::get('show/{id}', 'show')->name('classroom.view');
    Route::get('/createPatient', 'addPatients');
    Route::post('createPatient', 'store');
    Route::get('/goodAddPatient', function () {
        return view('auth/goodAddPatient');
    });
    Route::get('delete/{id}', 'destroy')->name('delete');
    Route::get('/goodDeletePatient', function () {
        return view('auth/goodDeletePatient');
    });
    Route::get('show/{id}', 'show')->name('show');
});


Route::controller(DescriptionController::class)->group(function () {
    Route::get('/description', 'index')->name('description');
    Route::post('description', 'store')->name('dede');
    Route::get('/goodAddPatient', function () {
        return view('auth/goodAddPatient');
    });
});



Route::controller(AppointmentController::class)->group(function () {

    Route::post('appointment', 'store')->name('appointment');
    Route::get('show-appointment/{id}', 'show')->name('show-appointment');
    Route::get('/goodAddPatient', function () {
        return view('auth/goodAddPatient');
    });
});

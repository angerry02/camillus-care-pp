<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->name('dashboard');

Route::post('/employee/save', [EmployeeController::class, 'store']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);
Route::put('/employee/edit/{employee}', [EmployeeController::class, 'update']);
Route::get('/employee/delete/{employee}', [EmployeeController::class, 'destroy']);

Route::get('/patient', [PatientController::class, 'index']);
Route::get('/patient/create', [PatientController::class, 'create']);
Route::post('/patient/save', [PatientController::class, 'store']);
Route::get('/patient/delete/{patient}', [PatientController::class, 'destroy']);
Route::get('/patient/{patient}/edit', [PatientController::class, 'edit']);
Route::put('/patient/edit/{patient}', [PatientController::class, 'update']);
///patient/schedule-manager/save
Route::get('/patient/{patient}/manage-schedule', [PatientController::class, 'manageSchedule']);
Route::post('/patient/schedule-manager/save/{patient}', [PatientController::class, 'saveSchedule']);
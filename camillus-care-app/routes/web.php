<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/employee/save', [EmployeeController::class, 'store']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);
Route::put('/employee/edit/{employee}', [EmployeeController::class, 'update']);
Route::get('/employee/delete/{employee}', [EmployeeController::class, 'destroy']);
Route::get('/employee/{employee}/view-schedule', [EmployeeController::class, 'viewSchedule']);

Route::get('/patient', [PatientController::class, 'index']);
Route::get('/patient/create', [PatientController::class, 'create']);
Route::post('/patient/save', [PatientController::class, 'store']);
Route::get('/patient/delete/{patient}', [PatientController::class, 'destroy']);
Route::get('/patient/{patient}/edit', [PatientController::class, 'edit']);
Route::put('/patient/edit/{patient}', [PatientController::class, 'update']);
Route::get('/patient/{patient}/manage-schedule', [PatientController::class, 'manageSchedule']);
Route::post('/patient/schedule-manager/save/{patient}', [PatientController::class, 'saveSchedule']);
Route::get('/patient/schedule-manager/delete/{id}', [PatientController::class, 'deleteSchedule']);

///patient/EM/save/{{ $patient->patient_id }}
Route::get('/patient/{patient_id}/medical-record', [PatientController::class, 'manageMedicalRecord']);
Route::post('/patient/EM/save/{patient}', [PatientController::class, 'saveEM']);
Route::post('/patient/LF/save', [PatientController::class, 'saveLF']);
Route::post('/patient/VIO/save', [PatientController::class, 'saveVIO']);
Route::get('/patient/VIO/delete/{id}', [PatientController::class, 'deleteVIO']);
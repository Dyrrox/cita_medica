<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialtyController;

Route::get('/', function () {
    return view('welcome');
});


// Rutas de Login
 Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
 Route::post('/login', [AuthController::class, 'login']);
 Route::get('/admin/dashboard', function () {
    if (session('cargo') != 1) {
        return redirect('/login');
    }
    return view('admin');
});



Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/admin/doctors-by-specialty/{codespe}', function ($codespe) {
$doctors = DB::table('doctor')->where('codespe', $codespe)->get();
return response()->json($doctors);});

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
Route::patch('/appointments/{id}/toggle-status', [AppointmentController::class, 'toggleStatus'])->name('appointments.toggle');

Route::get('/customers', [CustomerController::class, 'index']);
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');


Route::get('/doctors', [DoctorController::class, 'index']);
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::put('/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');
Route::delete('/doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');


Route::get('/specialties', [SpecialtyController::class, 'index']);
Route::post('/specialties', [SpecialtyController::class, 'store'])->name('specialties.store');
Route::put('/specialties/{id}', [SpecialtyController::class, 'update'])->name('specialties.update');
Route::delete('/specialties/{id}', [SpecialtyController::class, 'destroy'])->name('specialties.destroy');
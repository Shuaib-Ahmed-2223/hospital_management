<?php

use App\Http\Controllers\Admin\AddDoctorController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'redirect'])->middleware('auth','verified');

//AdminController 
Route::get('/admin/login', [AdminController::class, 'adminLogin']);
Route::post('/admin/login/form', [AdminController::class, 'adminLoginForm']);
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/appoint/approve/{id}', [AdminController::class, 'approve_appoint']);
Route::get('/appoint/delete/{id}', [AdminController::class, 'delete_appoint']);
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class, 'deleteDoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class, 'updateDoctor']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editDoctor']);
Route::get('/email/view/{id}', [AdminController::class, 'emailView']);
Route::post('/send/email/{id}', [AdminController::class, 'sendEmail']);

Route::get('/add/doctors/view', [AddDoctorController::class, 'addDoctorsView']);
Route::post('/add/doctors', [AddDoctorController::class, 'addDoctors']);
Route::post('/appointment', [FrontendController::class, 'appointment']);
Route::get('/myappointment', [FrontendController::class, 'myappointment']);
Route::get('/cancel_appoint/{id}', [FrontendController::class, 'cancel_appoint']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

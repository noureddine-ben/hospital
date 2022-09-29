<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controller\HomeController;
use Illuminate\Http\Controller\AdminController;


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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::post('/appointment', [App\Http\Controllers\HomeController::class, 'appointment']);
Route::group(['middleware' => ['admin']], function () {
    Route::get('/appointment-list', [App\Http\Controllers\AdminController::class, 'appointmentlist']);
    Route::get('/billing', [App\Http\Controllers\AdminController::class, 'billing']);
    Route::get('/Patients-list', [App\Http\Controllers\AdminController::class, 'Patientslist']);
    Route::get('/appointment-today', [App\Http\Controllers\AdminController::class, 'appointmentday']);
    Route::get('/appointment-add', [App\Http\Controllers\AdminController::class, 'appointmentlist']);
    Route::get('/uplead_doc/{id}', [App\Http\Controllers\AdminController::class, 'apdeatdoc']);
    Route::post('/updaet_doc/{id}', [App\Http\Controllers\AdminController::class, 'updaetdoc']);
    Route::get('/appointment-add', function () {return view('admin.addappointment');});
    Route::get('/add-doctor', function () {return view('admin.add_d');});
    Route::post('/adminappointment', [App\Http\Controllers\HomeController::class, 'appointment']);
    Route::get('/doctor-list', [App\Http\Controllers\AdminController::class, 'doclist']);
    Route::get('/delet_doc/{id}', [App\Http\Controllers\AdminController::class, 'delet']);
    Route::get('/appointmentdel/{id}', [App\Http\Controllers\AdminController::class, 'appointmentdel']);
    Route::get('/appointmentcon/{id}', [App\Http\Controllers\AdminController::class, 'appointmentcon']);
    Route::post('/uplead_doc', [App\Http\Controllers\AdminController::class, 'uplead']);
    Route::get('admin-view', [App\Http\Controllers\HomeController::class]);

 });
